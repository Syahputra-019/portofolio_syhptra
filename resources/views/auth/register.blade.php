{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
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
</x-guest-layout> --}}

<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/register.css') }}">
        <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    @endpush

    <div class="wrapper">
        <div class="login_box">
            <div class="login-header">
                <span>Register</span>
            </div>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="input_box">
                    <input id="name" type="text" class="input-field" name="name" :value="old('name')"
                        required autofocus>
                    <label for="name" class="label">Name</label>
                    <i class='bx bx-user icon'></i>
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email -->
                <div class="input_box">
                    <input id="email" type="email" class="input-field" name="email" :value="old('email')"
                        required>
                    <label for="email" class="label">Email</label>
                    <i class='bx bx-envelope icon'></i>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="input_box">
                    <input id="password" type="password" class="input-field" name="password" required>
                    <label for="password" class="label">Password</label>
                    <i class='bx bx-lock icon'></i>
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="input_box">
                    <input id="password_confirmation" type="password" class="input-field" name="password_confirmation"
                        required>
                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <i class='bx bx-lock-alt icon'></i>
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Submit -->
                <div class="input_box">
                    <input type="submit" class="input-submit" value="Register">
                </div>

                <!-- Redirect to Login -->
                <div class="register">
                    <span>Already have an account? <a href="{{ route('login') }}">Login</a></span>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
