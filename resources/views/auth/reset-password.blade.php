<x-base-layout title="Reset Password" class="w-full h-full flex items-center flex-col bg-gray-50 px-4 py-12">
    <div class="w-full max-w-sm space-y-8">
        <div class="text-center space-y-4">
            <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">{{ __('auth.reset.title') }}</h2>
            <p class="mt-2 text-base text-gray-600">{{ __('auth.reset.message') }}</p>
        </div>
        <a class="base-button" href={{ route('auth.login.index') }}>{{ __('auth.reset.action') }}</a>
    </div>
</x-base-layout>
