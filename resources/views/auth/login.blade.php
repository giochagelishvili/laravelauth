<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <h1 class="text-white text-3xl text-center mb-4">Welcome back! Please, log in.</h1>

        <!-- Email Address -->
        <div class="flex items-center gap-2 text-white border-b border-white px-2">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email"
                :value="old('email')" required autofocus autocomplete="username" />
        </div>

        <!-- Password -->
        <div class="flex items-center gap-2 text-white border-b border-white px-2 mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input placeholder="Password" id="password" class="block mt-1 w-full" type="password" name="password"
                required autocomplete="current-password" />
        </div>

        <div class="flex flex-col gap-2">
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="flex items-center justify-between mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>

            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
            @endif
        </div>

        <div class="flex items-center justify-center mt-4 w-full">
            <x-primary-button class="w-[80%] flex items-center justify-center mt-2 bg-white rounded-sm py-3 text-xl">
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="w-full flex items-center justify-center mt-4">
            <a class="underline text-lg text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('register') }}">
                {{ __('Not registered yet?') }}
            </a>
        </div>
    </form>
</x-guest-layout>
