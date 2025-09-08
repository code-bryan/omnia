<x-base-layout title="Login" class="w-full h-full flex items-center flex-col bg-gray-50 px-4 py-12">
    <div class="w-full max-w-sm space-y-8">
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">{{ __('auth.forgot.title') }}</h2>

        <form class="space-y-6" action="{{ route('auth.forgot.store') }}" method="POST" novalidate>
            @csrf

            <x-form.container name="email">
                <input autocomplete="email" class="base-input" id="email" name="email"
                    placeholder="{{ __('auth.login.email.placeholder') }}" required="" type="email" />
            </x-form.container>


            <button class="base-button" type="submit">
                {{ __('auth.forgot.action') }}
            </button>
        </form>

        <div>
            <p class="mt-2 text-center text-sm text-gray-600">
                {{ __('auth.forgot.remember.label') }}
                <a class="font-medium text-blue-600 hover:text-blue-500"
                    href={{ route('auth.login.index') }}>{{ __('auth.login.title') }}</a>
        </div>
    </div>


</x-base-layout>
