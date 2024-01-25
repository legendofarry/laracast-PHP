<nav class="bg-gray-800">

    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="logoNavDiv flex items-center">
                <div class="logoDiv flex-shrink-0">
                    <a href="index.php">
                        <img class="h-10 w-10" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company" loading="eager" /></a>
                </div>

                <div class="headerListDiv hidden md:block ">
                    <div class="headerListInnerDiv ml-10 flex items-baseline space-x-4  ">
                        <a href="index.php" class="
     <?=
         $_SERVER['REQUEST_URI'] === '/index.php' ? 'bg-[#ff5e13]' : 'hover:bg-gray-700 ';
     ?>

    <?= $_SERVER['REQUEST_URI'] === '/index.php' ? 'text-white ' : 'text-gray-300 ';
    ?>
hover:text-white rounded-md px-3 py-2 text-sm font-[600] text-lg transition-all" aria-current="page">Home</a>

                        <a href="about.php" class="
    <?=
        $_SERVER['REQUEST_URI'] === '/about.php' ? 'bg-[#ff5e13]' : 'hover:bg-gray-700 ';
    ?>

    <?=
        $_SERVER['REQUEST_URI'] === '/about.php' ? 'text-white ' : 'text-gray-300 ';
    ?>hover:text-white rounded-md px-3 py-2 text-sm font-[600] transition-all">About
                            us</a>

                        <a href="contact.php" class="
    <?=
        $_SERVER['REQUEST_URI'] === '/contact.php' ? 'bg-[#ff5e13]' : 'hover:bg-gray-700 ';
    ?>

    <?=
        $_SERVER['REQUEST_URI'] === '/contact.php' ? 'text-white ' : 'text-gray-300 ';
    ?>  hover:text-white rounded-md px-3 py-2 text-sm font-[600] transition-all">Contacts</a>

                        <a href="#"
                            class=" text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-[600]"
                            onclick="repotsAlert()">Reports</a>

                        <a href="#"
                            class=" text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-[600]"
                            onclick="serviceAlert()">Service</a>

                    </div>
                </div>
            </div>

            <div class="rightBtnsDiv hidden md:block ">
                <div class="rightBtnsInnerDiv ml-4 flex gap-[10px] items-center md:ml-6">
                    <button type="button"
                        class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800 ">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg class="h-6 w-6 fill-[#ff5e13]" fill="rgb(31 41 55 )" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">
                        <div>
                            <button type="button"
                                class="transition-all relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none hover:ring-2 hover:ring-[#ff5e13] hover:ring-offset-2 hover:ring-offset-gray-800 focus:ring-2 focus:ring-[#ff5e13] focus:ring-offset-2 focus:ring-offset-gray-800 menuProfile hover:scale-[1.2] focus:scale-[1.2] animate-pulse hover:animate-none "
                                title="Profile" id="user-menu-button" aria-expanded="false" aria-haspopup="true"
                                onclick="profile()">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                    src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                    alt="" />
                            </button>
                        </div>

                        <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
                        <div class="menu hidden absolute right-0 z-10 mt-2 pt-[30px] w-[250px] origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none scale-[1.2]
                        font-medium  " role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                            tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700  hover:bg-[#ff5e13] hover:text-white bg-[#fff1eb]"
                                role="menuitem" tabindex="-1" id="user-menu-item-0" onclick="pretend()">Your Profile</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700 hover:bg-[#ff5e13] hover:text-white bg-[#fff1eb]"
                                role="menuitem" tabindex="-1" id="user-menu-item-1" onclick="pretend()">Settings</a>
                            <a href="#"
                                class="block px-4 py-3 text-sm text-gray-700 rounded-b-md hover:bg-[#ff5e13] hover:text-white bg-[#fff1eb]"
                                role="menuitem" tabindex="-1" id="user-menu-item-2" onclick="pretend()">Sign out</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="menuDiv -mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button"
                    class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium"
                aria-current="page">Dashboard</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
            <a href="#"
                class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="" />
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium leading-none text-white">
                        Tom Cook
                    </div>
                    <div class="text-sm font-medium leading-none text-gray-400">
                        tom@example.com
                    </div>
                </div>
                <button type="button"
                    class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                </button>
            </div>
            <div class="mt-3 space-y-1 px-2">
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your
                    Profile</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
                <a href="#"
                    class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign
                    out</a>
            </div>

        </div>
    </div>
</nav>