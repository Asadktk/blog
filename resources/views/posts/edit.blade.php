<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Post Edit') }}
        </h2>
    </x-slot>   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                  <form action="{{ route('posts.update', $post) }}" method="POST">
                    @csrf
                    @method('PUT')
                    Title: <br/>
                    <input type="text" name="title" value="{{ $post->title }}" class="block font-medium text-sm text-gray-700 dark:text-gray-300"/>
                    <br/><br/>
                    Post:<br/>
                    <textarea name="post_text" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        {{ $post->post_text}}
                    </textarea>
                    <br/>
                    <br/>
                    Category:<br/>
                    <select name="category_id" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                        @foreach ($categories as $category)
                                <option value="{{ $category->id}}" @selected($category->id == $post->category_id)>
                                    {{ $category->name }}
                                </option>
                        @endforeach
                    </select>
                    <br/>
                    <br/>   
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">Submit</button>
                   
                  </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
