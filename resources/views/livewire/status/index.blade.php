<div>
    @foreach($statuses as $status)
    <div class="flex mb-5 shadow-lg bg-gray-100  rounded-lg" wire:poll>
        <div class="flex-shrink-0 mr-3 p-4">
            <img src="{{$status->user->gravatar()}}" class="w-10 h-10 object-cover object-center rounded-full" alt="">
        </div>
        <div class="">
            <div class="font-semibold text-cool-gray-900">{{$status->user->name}}</div>
            <a href="#" class="text-sm text-cool-gray-800 hover:text-cool-gray-400">{{$status->body}}</a>
            <div class="text-cool-gray-400 text-sm">{{$status->published()}}</div>
        </div>
    </div>
    @endforeach

    <div class="flex justify-center">
        <x-button.primary wire:click.prevent="loadmore">
            <span wire:loading class="px-10">
                waiting....
            </span>
            <span wire:loading.class="hidden" class="px-10">
                Loadmore
            </span>
        </x-button.primary>
    </div>
</div>
