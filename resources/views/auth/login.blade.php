<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="max-w-md w-full bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="p-6">
                <h3 class="text-3xl font-semibold text-center text-gray-700 mb-4">Login</h3>

                <form method="POST" action="{{ route('login') }}" class="space-y-6" >
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <x-input-label for="email" :value="__('Email')" class="text-sm font-medium text-gray-600" />
                        <x-text-input id="email" class="block mt-1 w-full text-sm border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <!-- Password -->
                    <div>
                        <x-input-label for="password" :value="__('Password')" class="text-sm font-medium text-gray-600" />
                        <x-text-input id="password" class="block mt-1 w-full text-sm border-gray-300 rounded-md focus:ring focus:ring-indigo-200 focus:border-indigo-300" type="password" name="password" required autocomplete="current-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2 text-sm text-red-600" />
                    </div>

                    <!-- Remember Me -->
                    <div class="flex items-center justify-between">
                        <label for="remember_me" class="inline-flex items-center text-sm text-gray-600">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2">{{ __('Remember me') }}</span>
                        </label>

                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>

                    <div class="flex items-center justify-between">
                        <x-primary-button class="w-full justify-center py-2 text-lg font-semibold">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </div>

                    <div class="text-center mt-6">
                        <span class="text-sm text-gray-600">
                            {{ __("Don't have an account?") }}
                            <a class="underline text-indigo-600 hover:text-indigo-900" href="{{ route('register') }}">
                                {{ __('Register') }}
                            </a>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
