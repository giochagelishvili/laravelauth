<x-guest-layout>
<form method="POST" action="{{ route('register') }}">
    @csrf

    <h1 class="text-white text-3xl text-center mb-4">Create your account.</h1>

    <!-- Name -->
    <div class="flex items-center gap-2 text-white border-b border-white px-2">
        <x-input-label for="name" :value="__('Person')" />
        <x-text-input placeholder="Username" id="name" class="block mt-1 w-full focus:outline-none" type="text"
            name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4 flex items-center gap-2 text-white border-b border-white px-2">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input placeholder="Email" id="email" class="block mt-1 w-full" type="email" name="email"
            :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4 flex items-center gap-2 text-white border-b border-white px-2">
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input placeholder="Password" id="password" class="block mt-1 w-full" type="password" name="password"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4 flex items-center gap-2 text-white border-b border-white px-2">
        <x-input-label for="password_confirmation" :value="__('Password')" />
        <x-text-input placeholder="Confirm Password" id="password_confirmation" class="block mt-1 w-full"
            type="password" name="password_confirmation" required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-between mt-4">
        <label for="terms_and_conditions" class="inline-flex items-center">
            <input id="terms_and_conditions" type="checkbox"
                class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                name="terms_and_conditions">
            <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('I agree to the terms and conditions')
                }}</span>
        </label>
    </div>

    <div class="flex items-center justify-center mt-4 w-full">
        <x-primary-button class="w-[80%] flex items-center justify-center mt-2 bg-white rounded-sm py-3 text-xl">
            {{ __('Register') }}
        </x-primary-button>
    </div>

    <div class="w-full flex items-center justify-center mt-4">
        <a class="underline text-lg text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>
    </div>
</form>
</x-guest-layout>
