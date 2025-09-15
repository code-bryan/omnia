<x-base-layout title="Welcome" class="flex h-full bg-gray-50">
    <x-navbar />

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
