{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
                <span class="underline text-sm text-gray-600 mx-1"> or </span>
                <a class="underline text-sm text-blue-600 hover:text-blue-900" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<x-guest-layout>
    @push('styles')
        <link rel="stylesheet" href="{{ asset('css/login.css') }}">
        <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
        <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&display=swap'>
    @endpush

    <div class="wrapper">
        <div class="login_box">
            <div class="login-header">
                <span>Login</span>
            </div>

            <form method="POST" action="{{ route('login') }}">
                @csrf

                {{-- Email --}}
                <div class="input_box">
                    <input type="email" name="email" id="email" class="input-field" value="{{ old('email') }}"
                        required autofocus>
                    <label for="email" class="label">Email</label>
                    <i class='bx bx-envelope icon'></i>
                    @error('email')
                        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="input_box">
                    <input type="password" name="password" id="password" class="input-field" required>
                    <label for="password" class="label">Password</label>
                    <i class='bx bx-lock-alt icon'></i>
                    @error('password')
                        <div class="text-sm text-red-500 mt-1">{{ $message }}</div>
                    @enderror
                </div>

                {{-- Remember Me --}}
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" name="remember" id="remember" class="mr-1">
                        <label for="remember">Remember me</label>
                    </div>

                    @if (Route::has('password.request'))
                        <div class="forgot">
                            <a href="{{ route('password.request') }}">Forgot password?</a>
                        </div>
                    @endif
                </div>

                {{-- Submit --}}
                <div class="input_box">
                    <input type="submit" value="Login" class="input-submit">
                </div>

                {{-- Register --}}
                @if (Route::has('register'))
                    <div class="register">
                        <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-guest-layout>
