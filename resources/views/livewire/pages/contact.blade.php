<div>
    <div class="my-16">
        <div class="flex justify-center">
            <div class="w-full max-w-3xl">
                <div class="flex flex-wrap mb-6">
                    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            First Name
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('first_name') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            type="text" placeholder="First Name" wire:model.lazy="first_name" name="first_name">
                        @error('first_name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Last Name
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('last_name') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" placeholder="Last Name" wire:model.lazy="last_name" name="last_name">
                        @error('last_name')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            E-mail
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('email') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="email" wire:model.lazy="email" name="email">
                        @error('email')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="flex flex-wrap mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Subjects
                        </label>
                        <input
                            class="block w-full text-gray-700 border @error('subject') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            type="text" wire:model.lazy="subject" name="subject">
                        @error('subject')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div wire:ignore class="flex flex-wrap mb-6">
                    <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">
                            Message
                        </label>
                        <textarea
                            class="block w-full text-gray-700 border @error('msg') border-red-500  @else border-gray-200 @enderror rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none" name="message" wire:model.lazy="msg"></textarea>
                        @error('msg')
                        <p class="text-red-500 text-xs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="md:flex px-3 md:items-center">
                    <div class="w-full">
                        <button
                            class="shadow bg-indigo-600 hover:bg-indigo-700 focus:shadow-outline text-white font-bold py-2 px-4 rounded"
                            wire:click="sendMail"
                            type="button">
                            Send
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
