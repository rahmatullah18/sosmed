<div>
    <div class="flex mb-5 shadow-lg bg-gray-100  rounded-lg" wire:poll>
        <div class="flex-shrink-0 mr-3 py-5 pl-5">
            <a href="{{route('account.show', ['identifier' => $status->user->usernameOrHash()])}}">
                <img src="{{$status->user->gravatar()}}" class="w-15 h-15 object-cover object-center rounded-full" alt="">
            </a>
        </div>
        <div class="px-2 py-4">
            <a href="{{route('account.show', ['identifier' => $status->user->usernameOrHash()])}}">
                <div class="font-semibold text-cool-gray-900">{{$status->user->name}}</div>
            </a>
            <a href="{{route('status.show', $status->hash)}}" class="text-sm text-cool-gray-800 hover:text-cool-gray-400">{{$status->body}}</a>
            <div class="text-cool-gray-400 text-sm">{{$status->published()}}</div>
            <div class="flex">
                <div class="text-gray-400 text-sm flex items-center mt-3 mr-4">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M2 5a2 2 0 012-2h7a2 2 0 012 2v4a2 2 0 01-2 2H9l-3 3v-3H4a2 2 0 01-2-2V5z"></path><path d="M15 7v2a4 4 0 01-4 4H9.828l-1.766 1.767c.28.149.599.233.938.233h2l3 3v-3h2a2 2 0 002-2V9a2 2 0 00-2-2h-1z"></path></svg> 
                    <div>
                        23
                    </div>
                </div>
                <div class="text-gray-400 text-sm flex items-center mt-3">
                    <svg class="w-5 h-5 mr-1" fill="currentColor" viewBox="0 0 20 20"><path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"></path></svg>
                    <div>
                        23
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
