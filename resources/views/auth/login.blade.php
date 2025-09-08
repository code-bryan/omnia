<x-base-layout title="Login" class="w-full h-full flex items-center flex-col bg-gray-50 px-4 py-12">
    <div class="w-full max-w-sm space-y-8">
        <h2 class="mt-6 text-3xl font-bold tracking-tight text-gray-900">Iniciar sesión</h2>

        <form class="space-y-6">
            <div class="flex flex-col space-y-1">
                <label class="block text-sm font-medium text-gray-700">Correo electrónico</label>
                <input autocomplete="email" class="base-input" id="email" name="email" placeholder="tu@email.com"
                    required="" type="email" />
            </div>

            <div class="flex flex-col space-y-1">
                <label class="block text-sm font-medium text-gray-700" for="password"> Contraseña </label>
                <input autocomplete="current-password" class="base-input" id="password" name="password"
                    placeholder="Tu contraseña" required="" type="password" />
            </div>

            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <input
                        class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-500 checked:bg-[image:--checkbox-tick-svg]"
                        id="remember-me" name="remember-me" type="checkbox" />
                    <label class="ml-2 block text-sm text-gray-900" for="remember-me"> Recordarme </label>
                </div>
                <div class="text-sm">
                    <a class="font-medium text-blue-600 hover:text-blue-500" href="#">
                        ¿Olvidaste tu contraseña?
                    </a>
                </div>
            </div>

            <button class="base-button" type="submit">
                Iniciar sesión
            </button>
        </form>
    </div>

</x-base-layout>
