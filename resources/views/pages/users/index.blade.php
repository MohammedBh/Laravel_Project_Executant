<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
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
            <section class="p-6 mx-auto grid grid-cols-4 gap-4">
                @foreach ($users as $user)
                    <div class="max-w-xs mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                        <img class="object-cover w-full h-56 px-8"
                            src="{{asset('storage/img/'.$user->avatars->src)}}"
                            alt="avatar">

                        <div class="py-5 text-center">
                            <span class="block text-2xl font-bold text-gray-800 dark:text-white px-2">{{$user->name.' '.$user->lastname}}</span>
                            <span class="text-sm text-gray-700 dark:text-gray-200">{{$user->email}}</span>
                            <div>
                                <span class="text-sm text-gray-700 dark:text-gray-200">{{$user->age}}y | <span class="  font-bold @if ($user->role_id == 1)
                                    text-red-500
                                    @else
                                    text-green-500
                                @endif">{{$user->roles->role}}</span></span>
                            </div>
                            <div class="text-center flex justify-around mt-3">
                                <form action="/users/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="px-4 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-red-500 rounded dark:bg-gray-700 hover:bg-red-400 hover:text-white"><svg
                                            xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>
                                </form>
                                <button type="submit" class="px-4 py-1 text-xs font-bold text-white uppercase transition-colors duration-200 transform bg-green-500 rounded hover:bg-green-400">
                                    <a href="/users/{{$user->id}}/edit"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                      </svg>
                                        </a>
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </section>
    </section>
</x-app-layout>
