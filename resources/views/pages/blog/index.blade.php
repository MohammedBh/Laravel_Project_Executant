<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog') }}
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
        <section class="w-full h-full">
            <a href="/blog/create">
                <button
                    class="px-5 py-3 mt-6 ml-6 font-semibold text-gray-100 transition-colors duration-200 transform bg-yellow-500 rounded-lg hover:bg-yellow-400"><svg
                        xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            </a>
            <div class="mb-6 mt-6">
                @include('partials.flash')
            </div>
            <section class="mt-10 w-auto mx-5">
                @foreach ($blogs as $blog)
                    <section class="my-5">
                        <div>
                            <h2
                                class=" text-2xl font-bold text-gray-800
                            dark:text-white md:text-3xl">
                                {{ $blog->title }}</h2>
                            <p class="mt-4 text-gray-600 dark:text-gray-400">{{ Str::limit($blog->content, 100) }} <a
                                    href="/blog/{{ $blog->id }}" class="ml-2 text-blue-500 hover:underline">Read
                                    More</a></p>

                            <div class="flex mt-8 gap-3">
                                @can('blog-edit')
                                    <div>
                                        <a href="/blog/{{ $blog->id }}/edit"
                                            class="px-4 py-1 font-semibold text-gray-100 transition-colors duration-200 transform bg-green-600 rounded-md hover:bg-green-500">Edit</a>
                                    </div>
                                @endcan
                                @can('blog-delete')
                                <div>
                                    <form action="/blog/{{ $blog->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button> <a
                                                class="px-4 py-1 font-semibold text-gray-100 transition-colors duration-200 transform bg-red-600 rounded-md hover:bg-red-500">Delete</a></button>
                                    </form>
                                </div>
                                @endcan
                            </div>
                        </div>
                    </section>
                    <hr>
                @endforeach
            </section>
        </section>
    </section>
    </section>
</x-app-layout>
