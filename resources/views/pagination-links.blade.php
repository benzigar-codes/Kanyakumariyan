@if($paginator->hasPages())
    <div class="w-full flex justify-between items-center mt-3 pt-3 border-t-4">
        <div>
            <span class="font-bold mr-3">Page : 
                <span class="font-medium">
                    {{$paginator->currentPage()}} of {{$paginator->lastPage()}}
                </span>
            </span>
        </div>
        <div>
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span aria-disabled="true">
                        <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 bg-white border border-gray-300 cursor-default">{{ $element }}</span>
                    </span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page">
                                <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-white bg-green-800 border border-gray-300 cursor-default">{{ $page }}</span>
                            </span>
                        @else
                            <button type="button" wire:click="gotoPage({{ $page }})" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out bg-white border border-gray-300 hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue active:bg-gray-100 active:text-gray-700" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                {{ $page }}
                            </button>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>
        <div class="flex">
            @if($paginator->onFirstPage())
            <button class="h-10 w-10 bg-green-800 text-green-200 p-2 rounded-full mr-2 hover:bg-green-900 focus:outline-none opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>
            @else
            <button wire:click="previousPage" class="h-10 w-10 bg-green-800 text-green-200 p-2 rounded-full mr-2 hover:bg-green-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                </svg>
            </button>
            @endif
            @if(!$paginator->hasMorePages())
            <button class="h-10 w-10 bg-green-800 text-green-200 p-2 rounded-full mr-2 hover:bg-green-900 focus:outline-none opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
            @else
            <button wire:click="nextPage" class="h-10 w-10 bg-green-800 text-green-200 p-2 rounded-full mr-2 hover:bg-green-900 focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                </svg>
            </button>
            @endif
        </div>
    </div>
@endif