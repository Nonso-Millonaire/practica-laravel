<x-guest-layout>
    <div class="flex min-h-screen">
        <div class="hidden lg:block lg:w-1/2 bg-cover bg-center relative"
             style="background-image: url('https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80');">
            <div class="absolute inset-0 bg-indigo-900 bg-opacity-40 flex items-center justify-center">
                <div class="text-white text-center p-10">
                    <h2 class="text-4xl font-bold mb-4">{{ __('Welcome back') }}</h2>
                    <p class="text-xl">{{ __('Academic Management Simplified') }}</p>
                </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-gray-50">
            <div class="max-w-md w-full">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        {{ __('Log in') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __('Please login or register to access the dashboard.') }}
                    </p>
                </div>

                <x-auth-session-status class="mb-4" :status="session('status')" />

                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   value="{{ old('email') }}">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                                {{ __('Remember me') }}
                            </label>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                    {{ __('Forgot your password?') }}
                                </a>
                            </div>
                        @endif
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                            {{ __('Log in') }}
                        </button>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-sm text-gray-600">
                            {{ __('Are you sure?') }} <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                {{ __('Register') }}
                            </a>
                        </p>
                    </div>

                    <div class="text-center mt-2">
                        <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-900">← {{ __('Cancel') }} / Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
