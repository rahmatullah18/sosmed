    <div class="p-5 mx-4 mb-5 border rounded-lg shadow-lg -mt-7 bg-cool-gray-50 border-cool-gray-200">
        @forelse($comments as $comment)
        <div class="flex p-1 mb-1">
            <div class="items-center flex-shrink-0 mr-3">
                <img src="{{$comment->user->gravatar()}}" alt="" class="object-cover object-center rounded-full w-7 h-7">
            </div>
            <div class="">
                <div class="px-2 border rounded-lg bg-cool-gray-100">
                    <div class="text-sm font-semibold capitalize ">
                        {{$comment->user->name}}
                    </div>  
                    <div class="my-1 text-sm ">
                        {{$comment->body}}
                    </div>
                </div>
                <div class="flex">
                    <div class="mr-2 text-xs text-cool-gray-400">
                        {{$comment->created_at->diffForHumans()}}
                    </div>
                    <div class="text-xs text-cool-gray-400">
                        {{$comment->children_count}} {{Str::plural('Reply', $comment->children_count)}}
                    </div>
                </div>
            </div>
        </div>
        @if($comment->children_count)
        <div class="" wire:poll>
            @foreach($comment->children as $comment)
            <div class="flex mb-1 pl-11">
                <div class="items-center flex-shrink-0 mr-3">
                    <img src="{{$comment->user->gravatar()}}" alt="" class="object-cover object-center border rounded-full w-7 h-7">
                </div>
                <div class="">
                    <div class="px-2 border rounded-lg bg-cool-gray-100">
                        <div class="text-sm font-semibold capitalize ">
                            {{$comment->user->name}}
                        </div>  
                        <div class="my-1 text-sm ">
                            {{$comment->body}}
                        </div>
                    </div>
                    <div class="flex">
                        <div class="mr-3 text-xs text-cool-gray-400">
                            {{$comment->created_at->diffForHumans()}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif

        @empty
    <div class="text-center text-cool-gray-300">No Comment</div>
    @endforelse
    <div class="mt-5">
        <div class="w-full">
            <form action="">
                <textarea class="w-full text-xs resize-none form-input fucus:outline-none focus:shadow-none" placeholder="Reply Comment"></textarea>
                <div class="flex justify-end">
                    <button class="px-4 py-2 text-xs rounded-lg bg-cool-gray-200 hover:bg-cool-gray-400">Reply</button>
                </div>
            </form>
        </div>
    </div>
</div>
