<div class="container">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2">
            <div class="mb-5 overflow-hidden border rounded-lg shadow-lg card">
                <div class="py-3 font-semibold text-center text-white bg-gray-600 card-header">
                    Edit Status
                </div>
                <div class="p-5 card-body">
                    <form wire:submit.prevent="update">
                        <textarea placeholder="What Your mind?" wire:model="body" class="w-full border-0 resize-none form-textarea focus:shadow-none">{{ old('body') ?? $status->body}}</textarea>
                        @error('body')
                        <div class="text-sm text-red-700">{{$message}}</div>
                        @enderror
                        <div class="flex justify-end ">
                            <x-button.primary>Edit</x-button.primary>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
