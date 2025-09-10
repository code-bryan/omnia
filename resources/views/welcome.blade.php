@php
    class Item
    {
        public function __construct(public string $key, public string $icon) {}
    }

    $items = [
        new Item('dashboard', 'widgets'),
        new Item('contabilidad', 'payments'),
        new Item('inventario', 'inventory_2'),
        new Item('ventas', 'shopping_cart'),
        new Item('compras', 'local_shipping'),
        new Item('nomina', 'receipt_long'),
        new Item('archivos', 'folder'),
    ];

@endphp

<x-base-layout title="Welcome" class="flex h-full bg-gray-50">
    <aside class="w-64 shrink-0 bg-white border-r border-gray-200 flex flex-col justify-between">
        <div class="p-4 space-y-8">
            <nav class="flex flex-col gap-2 flex-1">
                @foreach ($items as $item)
                    <a class="flex items-center gap-3 px-3 py-2 rounded-md {{ $item->key == 'dashboard' ? 'bg-blue-100 text-blue-400' : 'text-gray-600 hover:bg-gray-100' }}"
                        href="#">
                        <span class="material-symbols-outlined">{{ $item->icon }}</span>
                        <span class="text-sm font-medium">{{ Str::ucfirst($item->key) }}</span>
                    </a>
                @endforeach
            </nav>
        </div>

        <div class="border-t p-4 border-gray-200">
            <a class="flex items-center gap-3 px-3 py-2 rounded-md text-gray-600 hover:bg-gray-100" href="#">
                <span class="material-symbols-outlined">history</span>
                <span class="text-sm font-medium">Logs</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 flex-col flex">
        <x-header>
            <label class="relative">
                <span
                    class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">search</span>
                <input
                    class="w-full rounded-md border border-gray-200 bg-gray-50 pl-10 pr-4 py-2 text-sm placeholder:text-gray-400 focus:bg-white focus:border-blue-300 focus:ring-blue-300"
                    placeholder="Search" value="" />
            </label>
        </x-header>
    </main>
</x-base-layout>
