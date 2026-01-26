<x-guest-layout>
    <div class="flex min-h-screen">

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-gray-50">
            <div class="max-w-md w-full">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-extrabold text-gray-900">
                        {{ __('Register') }}
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        {{ __('Join our academic community today.') }} </p>
                </div>

                <form method="POST" action="{{ route('register') }}" class="space-y-6">
                    @csrf

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">{{ __('Name') }}</label>
                        <div class="mt-1">
                            <input id="name" name="name" type="text" required autofocus autocomplete="name"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   value="{{ old('name') }}">
                        </div>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" required autocomplete="username"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                   value="{{ old('email') }}">
                        </div>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" required autocomplete="new-password"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">{{ __('Confirm Password') }}</label>
                        <div class="mt-1">
                            <input id="password_confirmation" name="password_confirmation" type="password" required autocomplete="new-password"
                                   class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition">
                            {{ __('Register') }}
                        </button>
                    </div>

                    <div class="text-center mt-4">
                        <p class="text-sm text-gray-600">
                            {{ __('Already registered?') }}
                            <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                                {{ __('Log in') }}
                            </a>
                        </p>
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{ route('home') }}" class="text-sm text-gray-500 hover:text-gray-900">← {{ __('Cancel') }} / Home</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="hidden lg:block lg:w-1/2 bg-cover bg-center relative"
             style="background-image: url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
            <div class="absolute inset-0 bg-indigo-900 bg-opacity-40 flex items-center justify-center">
                <div class="text-white text-center p-10">
                    <h2 class="text-4xl font-bold mb-4">{{ __('Student CRUD') }}</h2>
                    <p class="text-xl">{{ __('Create, edit and delete students.') }}</p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
