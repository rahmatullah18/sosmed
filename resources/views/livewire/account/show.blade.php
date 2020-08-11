<div>
    <div class="py-10 -mt-6 bg-gray-100 ">
        <div class="container block md:flex md:justify-between">
            <div class="overflow-hidden">
                <div class="flex items-start">
                    <div class="flex-shrink-0 mr-3">
                        <img src="{{$user->gravatar()}}" class="object-cover object-center w-20 h-20 rounded">
                    </div>
                    
                    <div>
                        <h1 class="mb-1 text-xl font-semibold capitalize text-cool-gray-900">{{$user->name}}</h1>
                        <div class="">
                            <h1 class="mb-1 text-sm text-cool-gray-700">{{$bio}}</h1>
                            @if(strlen($bio) >= 120)
                            <div class="mb-2">
                                <button class=" {{$showBio ? 'block' : 'hidden'}} text-sm text-cool-gray-400 focus:outline-none" wire:click.prevent="readMore">ReadMore</button>
                                <button class=" {{$showBio ? 'hidden' : 'block'}} text-sm text-cool-gray-400 focus:outline-none" wire:click.prevent="less">Less</button>
                            </div>
                            @endif
                        </div>
        
                        <div class="mb-6 text-sm text-cool-gray-500">
                            Joined : {{$user->created_at->format("d F, Y")}}
                        </div>
                    </div>
                </div>
                <div class="flex justify-center">
                    <!-- button follow -->
                    <livewire:follow.button :user="$user">  
                </div>
            </div>
            <div class="w-full mt-5 md:w-1/2">
                <livewire:follow.statistic :user="$user">
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="flex justify-center">
            <div class="w-full md:w-1/2">
                @foreach($statuses as $status)
                <livewire:status.block :status="$status" :key="$status->id">
                @endforeach
            </div>
        </div>
    </div>
</div>
