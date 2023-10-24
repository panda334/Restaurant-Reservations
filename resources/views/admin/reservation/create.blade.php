<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex m-2 p-2">
            <a href="{{ route('adminreservation.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservations</a>
           </div>
           <div class="m-2 p-2">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('adminreservation.store') }}"  enctype="multipart/form-data">
                    @csrf
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">First Name</label>
                        <div class="mt-1">
                            <input type="name" id="first_name"  name="first_name"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('first_name') border-red-400 @enderror">
                        </div>
                        @error('first_name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>
                    
                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Last Name</label>
                        <div class="mt-1">
                            <input type="name" id="last_name"  name="last_name"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('last_name') border-red-400 @enderror">
                        </div>
                        @error('last_name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <div class="mt-1">
                            <input type="email" id="email"  name="email"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('email') border-red-400 @enderror">
                        </div>
                        @error('email')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone_Number</label>
                        <div class="mt-1">
                            <input type="phone" id="phone_number"  name="phone_number"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('phone_number') border-red-400 @enderror">
                        </div>
                        @error('phone_number')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="res_date" class="block text-sm font-medium text-gray-700">Reservation_Date</label>
                        <div class="mt-1">
                            <input type="datetime-local" id="res_date"  name="res_date"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('res_date') border-red-400 @enderror">
                        </div>
                        @error('res_date')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="guest_number" class="block text-sm font-medium text-gray-700">Guest_number</label>
                        <div class="mt-1">
                            <input type="number" id="guest_number"  name="guest_number"
                            class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 @error('guest_number') border-red-400 @enderror">
                        </div>
                        @error('guest_number')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                        <div class="sm:col-span-6 pt-5">
                            <label for="body" class="block text-sm font-medium text-gray-700">Table</label>
                            <div   class="mt-1">
                                <select id="table_id" name="table_id" class="form-multiselect black w-full mt-1 @error('table_id') border-red-400 @enderror" multiple>
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}" > {{ $table->name }} [{{ $table->guest_number }}]{Guest Number}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                            @error('table_id')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-6 p-4">
                        <button type="submit"
                        class="px-4 pt-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                    </div>
                </form>

           </div>

        </div>
    </div>
</x-admin-layout>
