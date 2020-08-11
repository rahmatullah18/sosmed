<div class="bg-white border-b shadow" x-data="{ open: false }">
    <div class="items-center md:flex md:justify-between">
        <div class="flex justify-between px-4 py-2 xm:bg-cool-gray-900 xm:bg-transparent md:border-b-0">
            <div class="">
                <a href="" class="text-lg font-semibold text-cool-gray-600">
                    Laravel
                </a>
            </div>

            <div class="md:hidden">
                <button @click="open = !open" class="text-cool-gray-600 focus:outline-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="items-center justify-between w-full py-2 leading-loose md:py-0 md:flex" :class="{ 'hidden' : !open }">
            <div class="py-2 md:flex md:items-center md:py-0">
                <a href="{{ route('timeline') }}" class="block px-4 text-gray-400 hover:text-cool-gray-900 md:py-2">Timeline</a>
                <a href="{{ route('login') }}" class="block px-4 text-gray-400 hover:text-cool-gray-900 md:py-2">Explore</a>
            </div>

            <div class="md:flex md:items-center">
                @auth
                <div x-data="{ dropdownIsOpen : false }" class="py-4 border-t border-gray-600 md:py-0 md:border-0 md:border-gray-600">
                    <div>
                        <button class="flex items-center px-4 focus:outline-none md:px-0" @click="dropdownIsOpen = !dropdownIsOpen">
                            <div class="mr-2 flex-shink-0 ">                               
                                <img src="{{auth()->user()->gravatar()}}" class="object-center w-8 h-8 border-2 rounded border-cool-gray-200">
                            </div>
                            <div class="block pr-4 text-gray-400 hover:text-cool-gray-900 md:py-2">
                                {{ auth()->user()->name }}
                            </div>
                        </button>
                    </div>

                    <div :class="{ 'md:hidden' : !dropdownIsOpen }" class="top-0 right-0 mt-2 leading-relaxed md:absolute md:mr-2 md:mt-11 md:bg-white md:w-56 md:rounded md:shadow md:py-2 md:leading-loose">
                        <a href="{{route('settings')}}" class="block px-4 text-gray-400 hover:text-cool-gray-900 ">
                            Setting
                        </a>
                        <!-- fungsi usernameOrHash didapat dari model user -->
                        <a href="{{route('account.show', auth()->user()->usernameOrHash() )}}" class="block px-4 text-gray-400 hover:text-cool-gray-900 ">
                            Your Profile
                        </a>
                        <a href="" class="block px-4 text-gray-400 hover:text-cool-gray-900 ">
                            Your Frends
                        </a>
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block px-4 text-gray-400 hover:text-cool-gray-900"
                        >
                            Log out
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                    @else
                        <a href="{{ route('login') }}" class="block px-4 text-gray-400 hover:text-cool-gray-900 md:py-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block px-4 text-gray-400 hover:text-cool-gray-900 md:py-2">Register</a>
                        @endif
                    @endauth
            </div>
        </div>
    </div>
</div>