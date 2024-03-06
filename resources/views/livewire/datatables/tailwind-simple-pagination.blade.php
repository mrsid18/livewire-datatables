<div class="flex justify-between gap-2">
<!-- Previous Page Link -->
@if ($paginator->onFirstPage())
<div class="rounded-md px-2.5 py-1.5 text-xs uppercase font-semibold shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 inline-flex items-center gap-x-1.5 text-gray-400 bg-gray-50 select-none">
    <x-icons.arrow-left class="!w-4" />
    {{ __('Previous')}}
</div>
@else
<button wire:click="previousPage" id="pagination-mobile-page-previous" class="rounded-md bg-white px-2.5 py-1.5 text-xs uppercase font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-green-500 hover:bg-green-500 hover:text-white inline-flex items-center gap-x-1.5">
    <x-icons.arrow-left class="!w-4"/>
    {{ __('Previous')}}
</button>
@endif


<!-- Next Page pnk -->
@if ($paginator->hasMorePages())
<button wire:click="nextPage" id="pagination-mobile-page-next" class="rounded-md bg-white px-2.5 py-1.5 text-xs uppercase font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:ring-green-500 hover:bg-green-500 hover:text-white inline-flex items-center gap-x-1.5">
    {{ __('Next')}}
    <x-icons.arrow-right class="!w-4" />
</button>
@else
<div class="rounded-md px-2.5 py-1.5 text-xs uppercase font-semibold shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 inline-flex items-center gap-x-1.5 text-gray-400 bg-gray-50 select-none">
    {{ __('Next')}}
    <x-icons.arrow-right class="inline !w-4" />
</div>
@endif
</div>