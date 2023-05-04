<div class="container mx-auto px-0 xl:px-14">
    <div class="flex">
        <div class="w-full">
            <nav>
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ URL::asset('images/logo-yudisthira-garden.png') }}" class="h-20 mr-3" alt="Flowbite Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-white rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto mt-2" id="navbar-default">
                        <ul class="font-medium flex flex-col text-sm p-4 md:p-0 mt-0 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                            <li>
                                <a href="{{ route('home') }}" class="block py-2 text-gray font-bold text-base border-b-2 md:border-b-0 md:text-sm md:font-light rounded md:bg-transparent md:text-white md:p-0" aria-current="page"><span class="hover:text-green-700">Home</span> <div class="hidden md:inline md:ml-2 lg:ml-5">|</div></a>
                            </li>
                            <li>
                                <a href="{{ route('about_us') }}" class="block py-2 text-gray font-bold text-base border-b-2 md:border-b-0 md:text-sm md:font-light rounded md:bg-transparent md:text-white md:p-0"><span class="hover:text-green-700">About</span> <div class="hidden ml-2 md:inline md:ml-2 lg:ml-5">|</div></a>
                            </li>
                            <li>
                                <a href="{{ route('plant') }}" class="block py-2 text-gray font-bold text-base border-b-2 md:border-b-0 md:text-sm md:font-light rounded md:bg-transparent md:text-white md:p-0"><span class="hover:text-green-700">Plant</span> <div class="hidden ml-2 md:inline md:ml-2 lg:ml-5">|</div></a>
                            </li>
                            <li>
                                <a href="{{ route('garden') }}" class="block py-2 text-gray font-bold text-base border-b-2 md:border-b-0 md:text-sm md:font-light rounded md:bg-transparent md:text-white md:p-0"><span class="hover:text-green-700">Garden</span> <div class="hidden ml-2 md:inline md:ml-2 lg:ml-5">|</div></a>
                            </li>
                            <li>
                                <a href="{{ route('contact_us') }}" class="block py-2 text-gray font-bold text-base md:text-sm md:font-light rounded md:bg-transparent md:text-white md:p-0"><span class="hover:text-green-700">Contact</span></a>
                            </li>
                            <li class="ml-5">
                                <a href="{{ route('login') }}" class="btn-main text-sm font-bold hidden -mt-2 md:block">Login | Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
