<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('categories.create') }}">Create New Category</a>
                    <br/>
                    <br/>
                   <table class="min-w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                            <th class="px-6 py-4">Name</th>
                            <th scope="col" class="px-6 py-4">Operation</th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $category->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="{{ route('categories.edit', $category ) }}">Edit</a>
                                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500" onclick="return confirm('Are You sure?')">
                                                <i class="fa-solid fa-trash"></i>
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    
                   </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
