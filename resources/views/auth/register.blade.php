<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-inputs.input-label for="name" :value="__('Username')" />
            <x-inputs.text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-inputs.input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-inputs.input-label for="email" :value="__('Email')" />
            <x-inputs.text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-inputs.input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-inputs.input-label for="password" :value="__('Password')" />
            <x-inputs.password-input id="password" name="password" autocomplete="new-password" class="block mt-1 w-full"/>
            <x-inputs.input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-inputs.input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-inputs.password-input id="password_confirmation" name="password_confirmation" autocomplete="new-password" class="block mt-1 w-full"/>
            <x-inputs.input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Agreement -->
        <div class="mt-4">
            <x-inputs.input-label for="has_agreed" class="flex justify-between">
                {{ __('I agree to the terms and conditions') }}
                <x-inputs.checkbox-input id="has_agreed" class="block mt-1"
                                  name="has_agreed" required/>
            </x-inputs.input-label>

            <x-inputs.input-error :messages="$errors->get('has_agreed')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


