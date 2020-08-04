<div class="bg-cool-gray-800" x-data="{ open: false }">
    <div class="md:flex md:justify-between items-center">
        <div class="flex justify-between px-4 py-2 xm:bg-cool-gray-900 xm:bg-transparent md:border-b-0">
            <div class="">
                <a href="" class="font-semibold text-white text-lg">
                    Laravel
                </a>
            </div>

            <div class="md:hidden">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                        <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="leading-loose py-2 md:py-0 md:flex justify-between w-full items-center" :class="{ 'hidden' : !open }">
            <div class="md:flex md:items-center py-2 md:py-0">
                <a href="{{ route('login') }}" class="block text-gray-400 hover:text-white px-4 md:py-2">Timeline</a>
                <a href="{{ route('login') }}" class="block text-gray-400 hover:text-white px-4 md:py-2">Explore</a>
            </div>

            <div class="md:flex md:items-center">
                @auth
                <div x-data="{ dropdownIsOpen : false }" class="py-4 border-t border-gray-600 md:py-0 md:border-0 md:border-gray-600">
                    <div>
                        <button class="flex items-center focus:outline-none px-4 md:px-0" @click="dropdownIsOpen = !dropdownIsOpen">
                            <div class="flex-shink-0 mr-2 ">
                                <img src="{{auth()->user()->gravatar()}}" class=" object-center object-center w-8 h-8 rounded">
                            </div>
                            <div class="block text-gray-400 hover:text-white pr-4 md:py-2">
                                {{ auth()->user()->name }}
                            </div>
                        </button>
                    </div>

                    <div :class="{ 'md:hidden' : !dropdownIsOpen }" class="md:absolute top-0 right-0 mt-2 md:mr-2 md:mt-11 md:bg-cool-gray-700 md:w-56 md:rounded md:shadow md:py-2 leading-relaxed md:leading-loose">
                        <a href="{{route('settings')}}" class="block text-gray-400 hover:text-white px-4 ">
                            Setting
                        </a>
                        <a href="" class="block text-gray-400 hover:text-white px-4 ">
                            Your Profile
                        </a>
                        <a href="" class="block text-gray-400 hover:text-white px-4 ">
                            Your Frends
                        </a>
                        <a
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            class="block text-gray-400 hover:text-white px-4"
                        >
                            Log out
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
                    @else
                        <a href="{{ route('login') }}" class="block text-gray-400 hover:text-white px-4 md:py-2">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="block text-gray-400 hover:text-white px-4 md:py-2">Register</a>
                        @endif
                    @endauth
            </div>
        </div>
    </div>
</div>