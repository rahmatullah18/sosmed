<div class="flex p-5 border rounded-lg border-cool-gray-200">
    <div class="mr-3 flex-shink-0">
        <img src="{{auth()->user()->gravatar()}}" class="object-cover object-center rounded-full w-7 h-7">
    </div>
    <div class="w-full ml-2">
        <div class="mb-3 text-sm font-semibold">{{auth()->user()->username}}</div>
        <div>
            <form wire:submit.prevent="store">
                <textarea wire:model="body" class="w-full p-0 border-0 resize-none form-textarea focus:shadow-none" placeholder="Your Comment...."></textarea>
                <div class="flex justify-end">
                    <x-button.primary>Comment</x-button.primary>
                </div>
            </form>
        </div>
    </div>
</div>
