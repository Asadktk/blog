 <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('posts.index') }}"> Posts </a>
                    <br/>
                    <br/>
                   <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                            <th class="px-6 py-4">Name</th>
                            <th class="px-6 py-4">Post</th>
                            <th class="px-6 py-4">Category</th>
                            <th scope="col" class="px-6 py-4">Operation</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4"> {{ $post->title }} </td>
                                    <td class="whitespace-nowrap px-6 py-4"> {{ $post->post_text }} </td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $post->category->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="{{ route('posts.edit', $post ) }}">Edit</a>
                                        <form method="POST" action="{{ route('posts.destroy', $post) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500" onclick="return confirm('Are You sure?')">
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            
                        </tbody>
                    </div>
                   
                    
                   {{-- </table>
                   <div class="mt-6 p-4">
                    {{ $posts->links() }}
            </div>  --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> 

{{-- <h1>{{ $post->title }}</h1>

<p>{{ $post->post_text }}</p>

<p>Category: {{ $post->category->name }}</p> --}}
