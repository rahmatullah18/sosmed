<div class="bg-gray-900">
    <div class="flex justify-center">
        <div class="w-1/3 flex text-white" wire:poll>
            <div class="flex-1 py-2 text-center border-r">
                <div>
                    Status
                </div>
                <div>
                    250
                </div>
            </div>
            <div class="flex-1 py-2 text-center border-r">
                <div>
                    Following
                </div>
                <div>
                    {{$user->follows()->count()}}
                </div>
            </div>
            <div class="flex-1 py-2 text-center">
                <div>
                    Followers
                </div>
                <div>
                    {{$user->followers()->count()}}
                </div>
            </div>
        </div>
    </div>
</div>
