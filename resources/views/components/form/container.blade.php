<div class="flex flex-col space-y-1">
    <label class="block text-sm font-medium text-gray-700" for="{{ $name }}">
        {{ $label }} {{ $required ? '*' : null }}
    </label>
    {{ $slot }}

    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
