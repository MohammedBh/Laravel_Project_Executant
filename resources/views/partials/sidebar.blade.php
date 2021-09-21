    <div
        class="flex flex-col w-64 @if (Auth::user()->role_id === 1)
        h-full
        @else
        h-screen
    @endif py-8 bg-gray-800 border-r dark:bg-gray-800 dark:border-gray-600">
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Google</h2>

        <div class="flex flex-col items-center mt-6 -mx-2">
            <img class="object-cover w-24 h-24 mx-2 rounded-full border-gray-700 border-2"
                src="{{ asset('storage/img/' . Auth::user()->avatars->src) }}" alt="avatar">
            <h4 class="mx-2 mt-2 font-medium text-white dark:text-gray-200 hover:underline">
                {{ Auth::user()->name . ' ' . Auth::user()->lastname }}</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-400 dark:text-gray-400 hover:underline">
                {{ Auth::user()->email }}</p>
        </div>

        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav class="sticky top-0">
                <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>


                    <span class="mx-4 font-medium">Dashboard</span>
                </a>
                @auth
                    @if (Auth::user()->role_id == 1)
                        <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/avatar">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>


                            <span class="mx-4 font-medium">Avatars</span>
                        </a>

                        <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/image">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                              </svg>


                            <span class="mx-4 font-medium">Images</span>
                        </a>

                        <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/category">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                              </svg>


                            <span class="mx-4 font-medium">Categories</span>
                        </a>

                        <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="/users">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                              </svg>


                            <span class="mx-4 font-medium">Users</span>
                        </a>
                    @endif
                @endauth

                <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="/gallery">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>


                    <span class="mx-4 font-medium">Gallery</span>
                </a>

                <a class="flex items-center px-6 py-4 mt-3 text-white transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                    href="/blog">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>



                    <span class="mx-4 font-medium">Blog</span>
                </a>
            </nav>
        </div>
    </div>
