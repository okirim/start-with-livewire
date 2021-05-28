<div>
    <section class="relative w-full max-w-md px-5 py-4 mx-auto rounded-md">
        <div class="relative">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                        <path
                            d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg>

                </span>
            <span class="absolute inset-y-0 right-6 flex items-center pr-3">

                <svg  wire:loading  class="animate-spin h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
                </span>

            <input wire:model.debounce500ms="search" type="search"
                   class="w-full py-3 pl-10 pr-4 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
                   placeholder="Search">
        </div>

      @if(count($results)>0)
            <div
                class="absolute  inset-x-0 px-6 py-3 mx-5 mt-4 overflow-y-auto bg-white border border-gray-300 rounded-md max-h-72 dark:bg-gray-800 dark:border-transparent">
                <a href="#" class="py-1 ">
                    @foreach($results as $result)
                        <div class="flex  items-center justify-start space-x-2 text-xs my-2">
                            <img src="{{$result['artworkUrl60']}}" alt="" class="rounded-full w-8 h-8">
                            <h3 class="font-medium text-gray-700 dark:text-gray-100 hover:underline">{{$result['artistName']}}</h3>

                        </div>
                    @endforeach
                </a>
            </div>
        @endif
    </section>
</div>
