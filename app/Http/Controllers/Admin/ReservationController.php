<?php

namespace App\Http\Controllers\Admin;

use App\Models\Table;
use App\Enums\TableStatus;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationStoreRequest;
use App\Http\Requests\ReservationUpdateRequest;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations=Reservation::all();
        return view('admin.reservation.index',compact('reservations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tables=Table::where('status',TableStatus::Available)->get();
        return view('admin.reservation.create',compact('tables'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReservationStoreRequest $request)
    {
        $request->validated();

        $table=Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning','Please choose the table based on guests');
        }

        $request_date=Carbon::parse($request->res_date);
        foreach($table->reservations as $res){
            if($res->res_date == $request_date){
                return back()->with('warning','This table is reserved for this date');
            }
        }


        Reservation::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'res_date'=>$request->res_date,
            'table_id'=>$request->table_id,
            'guest_number'=>$request->guest_number,

        ]);

        return to_route('adminreservation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservation $reservation)
    {
        $tables=Table::where('status',TableStatus::Available)->get();
        return view('admin.reservation.edit',compact('reservation','tables'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReservationUpdateRequest $request, Reservation $reservation)
    {
        $request->validated();
        $table=Table::findOrFail($request->table_id);
        if($request->guest_number > $table->guest_number){
            return back()->with('warning','Please choose the table based on guests');
        }
        $request_date=Carbon::parse($request->res_date);
        $reservations=$table->reservations()->where('id','!=', $reservation->id)->get();
        foreach($reservations as $res){
            if($res->res_date == $request_date){
                return back()->with('warning','This table is reserved for this date');
            }
        }
        $reservation->update($request->validated());

        return to_route('adminreservation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return to_route('adminreservation.index');
    }
}
