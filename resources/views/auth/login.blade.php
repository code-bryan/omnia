<x-base-layout title="Login" class="w-full h-full flex items-center flex-col bg-gray-50 px-4 py-12">
    <div class="w-full max-w-sm space-y-8">
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">{{ __('auth.login.title') }}</h2>

        <form class="space-y-6" action="{{ route('auth.login.store') }}" method="POST" novalidate>
            @csrf

            <x-form.container label="{{ __('auth.login.email.label') }}" name="email">
                <input autocomplete="email" class="base-input" id="email" name="email"
                    placeholder="{{ __('auth.login.email.placeholder') }}" required="" type="email" />
            </x-form.container>

            <x-form.container label="{{ __('auth.login.password.label') }}" name="password">
                <input autocomplete="current-password" class="base-input" id="password" name="password"
                    placeholder="{{ __('auth.login.password.placeholder') }}" required="" type="password" />
            </x-form.container>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 checked:bg-[image:--checkbox-tick-svg]"
                        id="remember-me" name="remember-me" type="checkbox" />
                    <label class="ml-2 block text-sm text-gray-900" for="remember-me">
                        {{ __('auth.login.remember') }}
                    </label>
                </div>
                <div class="text-sm">
                    <a class="font-medium text-blue-600 hover:text-blue-500" href={{ route('auth.forgot.index') }}>
                        {{ __('auth.login.forgot') }}
                    </a>
                </div>
            </div>

            {{-- TODO: move this to a error alert component --}}
            @if ($errors->has('auth'))
                <div class="mb-4 p-3 rounded bg-red-100 border border-red-400 text-red-700">
                    {{ $errors->first('auth') }}
                </div>
            @endif

            <button class="base-button" type="submit">
                {{ __('auth.login.title') }}
            </button>
        </form>
    </div>

</x-base-layout>
