<div class="mt-12 w-2/3 mx-auto"
     x-data="{ isUploading: false, progress: 0 }"
     x-on:livewire-upload-start="isUploading = true"
     x-on:livewire-upload-finish="isUploading = false"
     x-on:livewire-upload-error="isUploading = false"
     x-on:livewire-upload-progress="progress = $event.detail.progress"
>
    <form wire:submit.prevent="save">
        <div class="relative grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
            <div class="grid grid-cols-1 mt-5 mx-7">
                <div x-show="isUploading" class="h-8 mb-1" >
                    <progress max="100" :value="progress"></progress>
                </div>
                <label x-show="!isUploading" class="h-8  uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload
                    Photo</label>
                <div class='flex items-center justify-center w-full'>
                    <label
                        class='@error('photo') border-red-500 @enderror relative flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-purple-300 group '>
                        <div class=' flex flex-col items-center justify-center p-6'>
                            @if(!empty($photo) &&  $photo->isPreviewable() )
                                <img src="{{ $photo->temporaryUrl() }}"
                                     class="object-contain w-full h-24  rounded-xl
absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2
">
                            @else
                                <svg class="w-10 h-10 text-purple-400 group-hover:text-purple-600" fill="none"
                                     stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                <p class='lowercase text-sm text-gray-400 group-hover:text-purple-600 pt-1 tracking-wider'>
                                    Select a photo
                                </p>
                            @endif
                        </div>
                        <input class="hidden" type="file" wire:model="photo"/>

                    </label>
                </div>

            </div>
            @error('photo') <span class="text-center text-red-500 text-xs">{{ $message }}</span> @enderror

            <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                <button
                    wire:click="cancel"
                    class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                    Cancel
                </button>
                <button
                    type="submit"
                    class='w-auto bg-purple-500 hover:bg-purple-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>
                    Add
                </button>
            </div>

        </div>
    </form>

<!-- component -->
    <!-- Progress Bar -->

</div>
