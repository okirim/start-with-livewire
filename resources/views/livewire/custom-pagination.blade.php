<div>
    @if ($paginator->hasPages())

        <div class="px-5 bg-white py-5 flex flex-col xs:flex-row items-center xs:justify-between">
            <div class="flex items-center">
                @if ($paginator->onFirstPage())
                    <button type="button" disabled
                            class="w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white bg-gray-100">
                        <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                            </path>
                        </svg>
                    </button>
                @else
                    <button type="button" wire:click="previousPage" wire:loading.attr="disabled"
                            class="focus:outline-none w-full p-4 border text-base rounded-l-xl text-gray-600 bg-white hover:bg-gray-100">
                        <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1427 301l-531 531 531 531q19 19 19 45t-19 45l-166 166q-19 19-45 19t-45-19l-742-742q-19-19-19-45t19-45l742-742q19-19 45-19t45 19l166 166q19 19 19 45t-19 45z">
                            </path>
                        </svg>
                    </button>
                @endif
                @if ($elements)
                    @foreach ($elements as $element)
                        {{--                         "Three Dots" Separator--}}
                        @if (is_string($element))
                            <button type="button" disabled aria-disabled="true"
                                    class="w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white bg-gray-100 ">
                                {{ $element }}
                            </button>

                        @endif
                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <button type="button" disabled
                                            aria-disabled="true"
                                            class=" w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white bg-gray-100 ">
                                        {{$page}}
                                    </button>
                                @else
                                    <button type="button" wire:click="gotoPage({{$page}})"
                                            aria-label="{{ __('pagination.goto_page', ['page' => $page]) }}"
                                            class="  focus:outline-none w-full px-4 py-2 border-t border-b text-base text-indigo-500 bg-white hover:bg-gray-100 ">
                                        {{$page}}
                                    </button>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                @endif
                @if ($paginator->hasMorePages())
                    <button type="button" wire:click="nextPage"
                            class="focus:outline-none w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white hover:bg-gray-100">
                        <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                            </path>
                        </svg>
                    </button>
                @else
                    <button type="button" disabled
                            class="w-full p-4 border-t border-b border-r text-base  rounded-r-xl text-gray-600 bg-white bg-gray-100">
                        <svg width="9" fill="currentColor" height="8" class="" viewBox="0 0 1792 1792"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1363 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45l166-166q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z">
                            </path>
                        </svg>
                    </button>
                @endif

            </div>
        </div>
    @endif
</div>
