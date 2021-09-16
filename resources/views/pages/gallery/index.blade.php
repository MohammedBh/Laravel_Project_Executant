<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Gallery') }}
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
            <section class="mt-10 grid grid-cols-4 gap-4 mx-4">
                @foreach ($images as $image)
                    <div class="w-full max-w-xs text-center">
                        <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                            src="{{ asset('storage/img/' . $image->src) }}" alt="avatar" />

                        <div class="mt-2 flex items-center justify-between">
                            <button
                                class="px-2 tracking-wide text-white capitalize transition-colors duration-200 transform rounded-md bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow"><a
                                    class=" text-" href="{{ asset('storage/img/' . $image->src) }}"
                                    download="image.jpg">Download</a></button>
                            <p>Category : {{ $image->categories->name }}</p>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </section>
    </section>
</x-app-layout>
