<div class="container">
    <div class="flex justify-center">
        <div class="w-full md:w-1/2">
            <!-- status  -->
            <livewire:status.block :status="$status" :key="$status->id">

            <!-- comment index -->
            <livewire:comment.index :status='$status' :key="$status->id">

            <!-- comment create  -->
            @auth
            <livewire:comment.create :status="$status" :key="$status->id">
            @endauth
        </div>
    </div>
</div>
