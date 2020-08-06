<div>
    <div class="bg-gray-700 py-10 -mt-6">
        <div class="container">
            <div class="flex items-start">
                <div class="flex-shrink-0 mr-3">
                    <img src="{{$user->gravatar()}}" class="w-20 h-20 object-cover object-center rounded">
                </div>
                
                <div>
                    <h1 class="font-semibold text-xl text-white capitalize mb-1">{{$user->name}}</h1>
                    <div>
                        <h1 class="text-sm text-cool-gray-200 mb-1">{{$user->description}}</h1>
                    </div>
    
                    <div class="text-sm text-cool-gray-200 mb-6">
                        Joined : {{$user->created_at->format("d F, Y")}}
                    </div>
                    <!-- button follow -->
                    <livewire:follow.button :user="$user">  
                </div>
            </div>
        </div>
    </div>
    <livewire:follow.statistic :user="$user">
</div>
