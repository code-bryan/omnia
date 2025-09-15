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
