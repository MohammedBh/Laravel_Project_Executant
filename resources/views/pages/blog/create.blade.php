<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create a Blog') }}
        </h2>
    </x-slot>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> --}}
    <section class="flex">
        <section>
            @include('partials.sidebar')
        </section>
        <section class="w-full h-full mt-8">
            <div class="mb-8">
                @include('partials.flash')
            </div>
            <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Add a Post</h2>
                <form action="/blog" method="POST">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="username">Title</label>
                            <input name="title" type="text" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        </div>

                        <div class="w-full mt-4">
                            <label class="text-gray-700 dark:text-gray-200" for="username">Content</label>
                
                            <textarea name="content" class="block w-full h-40 px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">

                        <button type="submit"
                            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Add</button>
                    </div>
                </form>
            </section>
        </section>
    </section>
</x-app-layout>
