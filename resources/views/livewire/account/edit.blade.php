<div class="container">
    <div class="flex justify-center mt-5">
        <div class="w-full md:w-1/2">
            <div class="bg-white rounded shadow-lg p-5">
                <h1 class="text-lg text-gray-700 capitalize mb-5 text-center">update your profile</h1>

                <form action="" wire:submit.prevent="update">
                    <div class="mb-5">
                        <label for="picture" class="block mb-1 font-semibold">Picture:</label>
                        <input type="file" id="picture" wire:model="picture" class="appearance-none border-b-2  @error('picture') border-red-600 focus:border-red-600 bg-red-100  @else border-teal-700 @enderror w-full py-2 text-gray-700 mb-1 leading-tight focus:outline-none px-1">
                        @error('picture')
                        <div class="text-red-500"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="username" class="block mb-1 font-semibold">Username:</label>
                        <input type="text" wire:model="username" id="username" class="appearance-none border-b-2  @error('username') border-red-600 focus:border-red-600 focus:bg-red-100  @else border-teal-700 focus:bg-gray-100 @enderror w-full py-2 text-gray-700 mb-1 leading-tight focus:outline-none px-1">
                        @error('username')
                        <div class="text-red-500"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="mb-5 ">
                        <label for="name"  class="block mb-1 font-semibold">Name:</label>
                        <input type="text" wire:model="name" id="name" class="appearance-none border-b-2  @error('name') border-red-600 focus:border-red-600 focus:bg-red-100  @else border-teal-700 focus:bg-gray-100 @enderror w-full py-2 text-gray-700 mb-1 leading-tight focus:outline-none px-1">
                        @error('name')
                        <div class="text-red-500"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    <div class="mb-5 ">
                        <label for="description"  class="block mb-1 font-semibold">Biodata:</label>
                        <textarea type="text" wire:model="description" id="description" class="appearance-none border-b-2  @error('description') border-red-600 focus:border-red-600 focus:bg-red-100  @else border-teal-700 focus:bg-gray-100 @enderror w-full py-2 text-gray-700 mb-1 leading-tight focus:outline-none px-1">
                            
                        </textarea>
                        @error('description')
                        <div class="text-red-500"><small>{{$message}}</small></div>
                        @enderror
                    </div>
                    
                        <x-button.primary>Edit profile</x-button.primary>
                </form>
            </div>
        </div>
    </div>
</div>
