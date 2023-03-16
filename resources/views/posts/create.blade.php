<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <form action="{{ route('posts.store') }}" method="POST">
                    @csrf
                   
                    Title: <br/>
                    <input type="text" name="title" value="{{ old('title')}}" class="block font-medium text-sm text-gray-700 dark:text-gray-300"/>

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                    <br/><br/>
                    Post:<br/>
                    <textarea name="post_text" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        {{ old('post_text')}}
                    </textarea>

                    @error('post_text')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

                    <br/>
                    <br/>
                    Category:<br/>
                    <select name="category_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        @foreach ($categories as $category)
                                <option value="{{ $category->id}}">
                                    {{ $category->name }}
                                </option>
                        @endforeach
                    </select>

                    {{-- @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror --}}
                    <br/>
                    <br/>   
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Submit</button>
                   
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
