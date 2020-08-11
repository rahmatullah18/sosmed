<div>
    <div class="card border mb-5 rounded-lg overflow-hidden shadow-lg">
        <div class="card-header bg-gray-600 text-center font-semibold text-white py-3">
            Make New Status
        </div>
        <div class="card-body p-5">
            <form wire:submit.prevent="store">
                <textarea placeholder="What Your mind?" wire:model="body" class="form-textarea w-full resize-none border-0 focus:shadow-none"></textarea>
                @error('body')
                <div class="text-sm text-red-700">{{$message}}</div>
                @enderror
                <div class=" flex justify-end">
                    <x-button.primary>Post</x-button.primary>
                </div>
            </form>
        </div>
    </div>
</div>
