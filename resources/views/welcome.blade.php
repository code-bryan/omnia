@php
    $user = Auth::user()->firstname ?? 'World';
@endphp

<x-base-layout title="Welcome">
    <h1 class="font-bold text-2xl">Hello {{ $user }}</h1>

    @auth
        <form method="POST" action={{ route('auth.logout') }}>
            @csrf
            <button type="submit" class="base-button">Logout</button>
        </form>
    @endauth
</x-base-layout>
