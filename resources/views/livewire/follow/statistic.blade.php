<div class="">
    <div class="bg-white rounded-lg md:inline-block">
        <div class="w-full md:flex md:justify-center">
            <div class="flex" wire:poll>
                <div class="flex-1 px-6 py-2 text-center border-r border-cool-gray-100">
                    <div>
                        Status
                    </div>
                    <div class="font-semibold">
                        250
                    </div>
                </div>
                <div class="flex-1 px-6 py-2 text-center border-r border-cool-gray-100">
                    <div>
                        Following
                    </div>
                    <div class="font-semibold">
                        {{$user->follows()->count()}}
                    </div>
                </div>
                <div class="flex-1 px-6 py-2 text-center">
                    <div>
                        Followers
                    </div>
                    <div class="font-semibold">
                        {{$user->followers()->count()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
