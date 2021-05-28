<div class="flex items-center justify-center p-4 bg-gray-800">
    @if(!empty($success_message))
        <div
            class="  z-10 absolute bottom-10 right-10 flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-green-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"/>
                </svg>
            </div>

            <div class=" px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold text-green-500 dark:text-green-400">Success</span>
                    <p class="text-sm text-gray-600 dark:text-gray-200">{{$success_message}}</p>
                </div>
                <button wire:click="closeFlashMessage"
                        class="hover:text-red-500 focus:border-none focus:outline-none absolute top-2 right-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

    @endif
    <form wire:submit.prevent="handleSubmit" method="POST">
        @csrf
        <section
            class=" transform scale-75 w-full max-w-2xl px-6 py-4 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
            <h2 class="text-3xl font-semibold text-center text-gray-800 dark:text-white">Get in touch</h2>
            <div class="mt-6 ">
                <div class="items-center -mx-2 md:flex">
                    <div class="w-full mx-2">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Name</label>

                        <input wire:model.lazy="name" value="{{old('name')}}"
                               class="@error('name') border-red-500 @enderror block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                               type="text">
                        @error('name')
                        <span class="absolute text-red-500 text-xs p-2">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="w-full mx-2 mt-4 md:mt-0">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">E-mail</label>

                        <input wire:model.lazy="email" value="{{old('email')}}"
                               class="@error('email') border-red-500 @enderror block w-full px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                               type="email">
                        @error('email')
                        <span class="absolute text-red-500 text-xs p-2">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="w-full mt-6">
                    <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200">Message</label>

                    <textarea wire:model.lazy="message"
                              class="@error('message') border-red-500 @enderror block w-full h-40 px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">{{old('message')}}</textarea>
                    @error('message')
                    <span class="absolute text-red-500 text-xs p-2">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-center mt-6">
                    <button
                        class="disabled:opacity-50 px-4 py-2 text-blue-100 transition-colors duration-200 transform bg-blue-500 rounded-md hover:bg-blue-400 focus:outline-none focus:bg-gray-600">
                        <svg wire:loading wire:target="handleSubmit" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Send Message
                    </button>
                </div>
            </div>
        </section>
    </form>
</div>
