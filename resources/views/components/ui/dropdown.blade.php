<div class="relative">
    <div>
        {{ $slot }}
    </div>

    <div
        class="absolute right-1 mt-1.5 w-64 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-gray-200 ring-opacity-5 focus:outline-none z-10">

        @foreach ($items as $item)
            @if ($item instanceof \App\View\SeparatorItem)
                <div class="border-t border-gray-200"></div>
            @else
                <a class="flex items-center gap-3 px-4 py-3 text-sm text-gray-700 hover:bg-gray-100" href="#"
                    id="user-menu-item-2" role="menuitem" tabindex="-1">
                    <span class="material-symbols-outlined text-base">{{ $item->icon }}</span>
                    {{ $item->key }}
                </a>
            @endif
        @endforeach
    </div>
</div>
