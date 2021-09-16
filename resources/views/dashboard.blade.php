<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
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
        <section class="w-full h-full mt-10">
            <h1 class="text-center mb-20 text-3xl text-gray-700">Welcome, {{Auth::user()->name}} !</h1>
            <div class="mb-8">
                @include('partials.flash')
            </div>
            <div class="flex max-w-md mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                <div class="w-1/3 bg-cover">
                    <img class="w-full p-3 mt-2" src="{{ asset('storage/img/' . Auth::user()->avatars->src) }}" alt="">
                </div>

                <div class="w-2/3 p-4 md:p-4">
                    <h1 class="text-2xl font-bold text-gray-800 dark:text-white">
                        {{ Auth::user()->name . ' ' . Auth::user()->lastname }}</h1>

                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">Age : {{ Auth::user()->age }} | Role : <span
                        class="@if (Auth::user()->role_id == 1) text-red-500 font-semibold @else font-semibold text-green-500 @endif">{{ Auth::user()->roles->role }}</span></p>
                    <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">E-mail : {{ Auth::user()->email }}</p>
                    <div class="flex justify-between mt-3 item-center">
                        <a class="px-2 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-green-600 rounded dark:bg-green-700 hover:bg-green-500 dark:hover:bg-green-500" href="/user/{{Auth::user()->id}}/edit">Edit Profile</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
</x-app-layout>
