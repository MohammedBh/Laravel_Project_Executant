<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
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
            <section class="p-6 mx-auto ">
                <section class="bg-white dark:bg-gray-800">
                    <div class="container px-6 py-8 mx-auto">
                        <div class="">
                            <div class="w-auto">
                                <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">{{$show->title}}</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 ">{{$show->content}}</p>
                        </div>
                    </div>
                </section>
                <button class="mt-5 ml-1 text-blue-500 hover:underline">
                    <a href="/blog"><- Go Back</a>
                </button>
            </section>
        </section>
    </section>
</x-app-layout>
