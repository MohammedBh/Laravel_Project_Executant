    <div class="flex flex-col w-64 h-screen py-8 bg-white border-r dark:bg-gray-800 dark:border-gray-600">
        <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Google</h2>

        <div class="flex flex-col items-center mt-6 -mx-2">
            <img class="object-cover w-24 h-24 mx-2 rounded-full" src="{{ asset('storage/img/' . Auth::user()->avatars->src) }}" alt="avatar">
            <h4 class="mx-2 mt-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">{{Auth::user()->name .' '. Auth::user()->lastname}}</h4>
            <p class="mx-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-400 hover:underline">{{Auth::user()->email}}</p>
        </div>
        
        <div class="flex flex-col justify-between flex-1 mt-6">
            <nav>
                <a class="flex items-center px-6 py-4 tex3-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 22H5C4.44772 22 4 21.5523 4 21V13H2L11.292 3.70698C11.4796 3.51921 11.7341 3.4137 11.9995 3.4137C12.2649 3.4137 12.5194 3.51921 12.707 3.70698L22 13H20V21C20 21.5523 19.5523 22 19 22ZM10 15H14V20H18V11.828L12 5.82798L6 11.828V20H10V15Z" fill="#2E3A59"></path>
                        </svg>
                        

                    <span class="mx-4 font-medium">Dashboard</span>
                </a>

                <a class="flex items-center px-6 py-4 mt-3 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0001 22C10.4882 22.0043 8.99532 21.6622 7.6361 21C7.13865 20.758 6.66203 20.4754 6.2111 20.155L6.0741 20.055C4.83392 19.1396 3.81997 17.9522 3.1101 16.584C2.37584 15.1679 1.99501 13.5952 2.00005 12C2.00005 6.47715 6.47725 2 12.0001 2C17.5229 2 22.0001 6.47715 22.0001 12C22.0051 13.5944 21.6247 15.1664 20.8911 16.582C20.1822 17.9494 19.1697 19.1364 17.9311 20.052C17.4639 20.394 16.968 20.6951 16.4491 20.952L16.3691 20.992C15.009 21.6577 13.5144 22.0026 12.0001 22ZM12.0001 17C10.5016 16.9971 9.12776 17.834 8.4431 19.167C10.6845 20.2772 13.3157 20.2772 15.5571 19.167V19.162C14.8716 17.8305 13.4977 16.9954 12.0001 17ZM12.0001 15C14.1662 15.0028 16.1635 16.1701 17.2291 18.056L17.2441 18.043L17.2581 18.031L17.2411 18.046L17.2311 18.054C19.7601 15.8691 20.6644 12.3423 19.4987 9.21011C18.3331 6.07788 15.3432 4.00032 12.0011 4.00032C8.65901 4.00032 5.66909 6.07788 4.50345 9.21011C3.33781 12.3423 4.2421 15.8691 6.7711 18.054C7.83736 16.169 9.83446 15.0026 12.0001 15ZM12.0001 14C9.79096 14 8.0001 12.2091 8.0001 10C8.0001 7.79086 9.79096 6 12.0001 6C14.2092 6 16.0001 7.79086 16.0001 10C16.0001 11.0609 15.5787 12.0783 14.8285 12.8284C14.0784 13.5786 13.061 14 12.0001 14ZM12.0001 8C10.8955 8 10.0001 8.89543 10.0001 10C10.0001 11.1046 10.8955 12 12.0001 12C13.1047 12 14.0001 11.1046 14.0001 10C14.0001 8.89543 13.1047 8 12.0001 8Z" fill="#2E3A59"></path>
                        </svg>
                        

                    <span class="mx-4 font-medium">Avatars</span>
                </a>

                <a class="flex items-center px-6 py-4 mt-3 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 18H20C21.1046 18 22 17.1046 22 16V4C22 2.89543 21.1046 2 20 2H8C6.89543 2 6 2.89543 6 4V16C6 17.1046 6.89543 18 8 18ZM8 16V4H20V16H8Z" fill="#2E3A59"></path>
                        <path d="M2 8H4V20H16V22H4C2.89543 22 2 21.1046 2 20V8Z" fill="#2E3A59"></path>
                        <path d="M10 14H19L15.25 8.55556L13 11.6667L12.25 10.8889L10 14Z" fill="#2E3A59"></path>
                        <path d="M10.75 8.16667C10.75 8.811 11.2537 9.33333 11.875 9.33333C12.4963 9.33333 13 8.811 13 8.16667C13 7.52233 12.4963 7 11.875 7C11.2537 7 10.75 7.52233 10.75 8.16667Z" fill="#2E3A59"></path>
                        </svg>
                        

                    <span class="mx-4 font-medium">Images</span>
                </a>

                <a class="flex items-center px-6 py-4 mt-3 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 23.27L3 16.27L4.62 15.01L11.99 20.74L19.37 15.001L21 16.27L12 23.27ZM12 19L3 12L4.62 10.74L11.99 16.47L19.37 10.73L21 12L12 19ZM12 14.73L4.63 9.00001L3 7.73001L12 0.730011L21 7.73001L19.36 9.00001L12 14.73Z" fill="#2E3A59"></path>
                        </svg>
                        

                    <span class="mx-4 font-medium">Categories</span>
                </a>

                <a class="flex items-center px-6 py-4 mt-3 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 21H7V19H9V18H3C1.89543 18 1 17.1046 1 16V5C1 3.89543 1.89543 3 3 3H21C22.1046 3 23 3.89543 23 5V16C23 17.1046 22.1046 18 21 18H15V19H17V21ZM3 5V16H21V5H3Z" fill="#2E3A59"></path>
                        </svg>
                        

                    <span class="mx-4 font-medium">Gallery</span>
                </a>

                <a class="flex items-center px-6 py-4 mt-3 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 3C6.23858 3 4 5.23858 4 8C4 10.7614 6.23858 13 9 13C11.7614 13 14 10.7614 14 8C14 5.23858 11.7614 3 9 3ZM6 8C6 6.34315 7.34315 5 9 5C10.6569 5 12 6.34315 12 8C12 9.65685 10.6569 11 9 11C7.34315 11 6 9.65685 6 8Z" fill="#2E3A59"></path>
                        <path d="M16.9084 8.21828C16.6271 8.07484 16.3158 8.00006 16 8.00006V6.00006C16.6316 6.00006 17.2542 6.14956 17.8169 6.43645C17.8789 6.46805 17.9399 6.50121 18 6.5359C18.4854 6.81614 18.9072 7.19569 19.2373 7.65055C19.6083 8.16172 19.8529 8.75347 19.9512 9.37737C20.0496 10.0013 19.9987 10.6396 19.8029 11.2401C19.6071 11.8405 19.2719 12.3861 18.8247 12.8321C18.3775 13.2782 17.8311 13.6119 17.2301 13.8062C16.6953 13.979 16.1308 14.037 15.5735 13.9772C15.5046 13.9698 15.4357 13.9606 15.367 13.9496C14.7438 13.8497 14.1531 13.6038 13.6431 13.2319L13.6421 13.2311L14.821 11.6156C15.0761 11.8017 15.3717 11.9248 15.6835 11.9747C15.9953 12.0247 16.3145 12.0001 16.615 11.903C16.9155 11.8059 17.1887 11.639 17.4123 11.416C17.6359 11.193 17.8035 10.9202 17.9014 10.62C17.9993 10.3198 18.0247 10.0006 17.9756 9.68869C17.9264 9.37675 17.8041 9.08089 17.6186 8.82531C17.4331 8.56974 17.1898 8.36172 16.9084 8.21828Z" fill="#2E3A59"></path>
                        <path d="M19.9981 21C19.9981 20.475 19.8947 19.9551 19.6938 19.47C19.4928 18.9849 19.1983 18.5442 18.8271 18.1729C18.4558 17.8017 18.0151 17.5072 17.53 17.3062C17.0449 17.1053 16.525 17.0019 16 17.0019V15C16.6821 15 17.3584 15.1163 18 15.3431C18.0996 15.3783 18.1983 15.4162 18.2961 15.4567C19.0241 15.7583 19.6855 16.2002 20.2426 16.7574C20.7998 17.3145 21.2417 17.9759 21.5433 18.7039C21.5838 18.8017 21.6217 18.9004 21.6569 19C21.8837 19.6416 22 20.3179 22 21H19.9981Z" fill="#2E3A59"></path>
                        <path d="M16 21H14C14 18.2386 11.7614 16 9 16C6.23858 16 4 18.2386 4 21H2C2 17.134 5.13401 14 9 14C12.866 14 16 17.134 16 21Z" fill="#2E3A59"></path>
                        </svg>
                        

                    <span class="mx-4 font-medium">Users</span>
                </a>
            </nav>
        </div>
    </div>