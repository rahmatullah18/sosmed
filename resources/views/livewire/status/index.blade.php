<div>
    @foreach($statuses as $status)
        <livewire:status.block :status="$status" :key="$status->id">
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
