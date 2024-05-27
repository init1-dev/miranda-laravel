<x-guest-layout>
    @section('content')
        <div class="main">
            <div class="main__container">
                <div class="main__upper">
                    <p class="main__upper--text">THE ULTIMATE LUXURY</p>
                </div>

                <div class="main__middle">
                    <p class="main__middle--text">Login</p>
                </div>
            </div>
            <div class="banner__breadcrumb">
                <div class="banner__breadcrumb-inner">
                    <span>
                        <a href={{route('index')}}>Home</a>
                    </span><span>|</span><span>Login</span>
                </div>
            </div>
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form class="dashboard__section" method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-control">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-control mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="form-control--flex block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="form-control--flex flex--col items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <div class="main__buttons form-control--flex">
                    <x-primary-button class="color ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>

            </div>
        </form>
    @endsection
</x-guest-layout>
