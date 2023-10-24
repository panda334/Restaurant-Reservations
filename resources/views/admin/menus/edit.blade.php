<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="flex m-2 p-2">
            <a href="{{ route('adminmenus.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Menus</a>
           </div>
           <div class="m-2 p-2">
            <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                <form method="POST" action="{{ route('adminmenus.update',$menu->id) }}"  enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="sm:col-span-6">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <div class="mt-1">
                            <input type="name" id="name" name="name" value="{{ $menu->name }}"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('image') border-red-400 @enderror">
                        </div>
                        @error('name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>
                    
                    <div class="sm:col-span-6">
                        <label for="image" class="block text-sm font-medium text-gray-700">Image</label>

                        <div>
                            <img class="w-32 h-32 " src="{{ Storage::url($menu->image) }}">
                        </div>

                        <div class="mt-1">
                            <input type="file" id="image" name="image"
                            class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal @error('image') border-red-400 @enderror">
                        </div>
                        @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>
                    <div class="sm:col-span-6 pt-5">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <div class="mt-1">
                            <textarea id="description" rows="3" name="description" 
                            class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition-none @error('description') border-red-400 @enderror">
                             {{ $menu->description }}
                        </textarea>
                        </div>
                        @error('description')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="sm:col-span-6">
                        <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                        <div class="mt-1">
                            <input type="number" id="price" name="price" value="{{ $menu->price }}"
                            class="block w-full transition duration-150 ease-out appearance-none bg-white border border-gray-400 @error('price') border-red-400 @enderror">
                        </div>
                        @error('price')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                    </div>

                    
                    <div class="sm:col-span-6 pt-5">
                        <label for="body" class="block text-sm font-medium text-gray-700">Categories</label>
                        <div   class="mt-1">
                            <select id="categories" name="categories[]" class="form-multiselect black w-full mt-1 @error('categories') border-red-400 @enderror"" multiple>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected($menu->categories->contains($category)) >
                                         {{ $category->name }}</option>
                                    
                                @endforeach
                            </select>
                            @error('categories')
                            <div class="text-sm text-red-400">{{ $message }}</div>
                        @enderror
                        </div>

                    <div class="mt-6 p-4">
                        <button type="submit"
                        class="px-4 pt-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Update</button>
                    </div>
                </form>

           </div>

        </div>
    </div>
</x-admin-layout>
