<header class="flex items-center justify-between border-b border-gray-200 bg-white px-6 py-2">
    <div class="flex-1 max-w-md">
        {{ $slot }}
    </div>

    <div class="flex items-center gap-4">
        <button
            class="flex items-center relative rounded-full p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">
            <span class="material-symbols-outlined">notifications</span>
            <span class="absolute top-1 right-1 h-2 w-2 rounded-full bg-red-500"></span>
        </button>

        <button
            class="flex items-center relative rounded-full p-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700 cursor-pointer">
            <span class="material-symbols-outlined">settings</span>
        </button>

        <div class="flex items-center justify-center size-10 rounded-full bg-blue-100">
            <span class="text-blue-500 font-medium">BA</span>
        </div>
    </div>
</header>
