<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Avatars') }}
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
                <h2 class="text-lg font-semibold text-gray-700 capitalize dark:text-white">Add an avatar</h2>
                <form action="/avatar" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-1">
                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="username">Name</label>
                            <input name="name" type="text"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        </div>

                        <div>
                            <label class="text-gray-700 dark:text-gray-200" for="username">Upload Image</label>
                            <input name="src" type="file"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        </div>
                    </div>

                    <div class="flex justify-end mt-6">

                        <button type="submit"
                            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Add</button>
                    </div>
                </form>
            </section>
            <section>
                <h1 class="text-center text-3xl mt-8 text-gray-700">Available Avatars</h1>
                <div class="mt-10 grid grid-cols-4">
                    @foreach ($avatars as $avatar)
                        <div class="mb-5 max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                            <div class=" bg-cover p-3">
                                <img src="{{ asset('storage/img/' . $avatar->src) }}" alt="">
                            </div>

                            <div class="py-2">
                                <form action="/avatar/{{ $avatar->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div>
                                        <h1
                                            class="text-center text-1xl
                                        font-bold text-gray-800 dark:text-white">
                                            {{ $avatar->name }}</h1>
                                        <div class="justify-center flex">
                                            <button type="submit"
                                                class="px-8 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-red-500 rounded dark:bg-gray-700 hover:bg-red-400 hover:text-white"><svg
                                                    xmlns="http://www.w3.org/2000/svg" class="h-5 w-4"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </section>
    </section>
</x-app-layout>
