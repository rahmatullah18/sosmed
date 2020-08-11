<div>
    <!-- jika dia login dan user tidak sama dengan user saat ini maka tampilkan -->
    @if(auth()->check() && auth()->user()->isNot($user))

    @if(auth()->user()->following($user))
    <x-button.error wire:click="unfollow">Unfollow</x-button.error>
    @else
    <x-button.primary wire:click="follow">Follow</x-button.primary>
    @endif

    @else
        @auth
        <a href="{{route('settings')}}" class="inline-flex justify-center  w-full px-4 py-2 text-sm font-medium text-black bg-white border border-transparent rounded-md hover:bg-cool-gray-200 focus:outline-none focus:border-white-700 focus:shadow-none active:bg-white shadow transition duration-150 ease-in-out">
            Edit your profile
        </a>
        @endauth
    @endif
</div>
