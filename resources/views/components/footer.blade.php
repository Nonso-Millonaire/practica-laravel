<footer class="bg-gray-900 text-gray-300 border-t border-gray-700 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

            <div class="col-span-1 md:col-span-2">
                <h3 class="text-white text-lg font-bold mb-4 flex items-center">
                    <svg class="w-6 h-6 mr-2 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    {{ config('app.name', 'Laravel') }}
                </h3>
                <p class="text-sm text-gray-400 leading-relaxed max-w-xs">
                    {{ __('Manage students, projects, and resources efficiently. Designed for speed, security, and ease of use.') }}
                </p>
            </div>

            <div>
                <h3 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">
                    {{ __('Quick Links') }}
                </h3>
                <ul class="space-y-2">
                    @auth
                        <li><a href="{{ route('dashboard') }}" class="hover:text-white transition">{{ __('Dashboard') }}</a></li>
                        <li><a href="{{ route('students.index') }}" class="hover:text-white transition">{{ __('Manage Students') }}</a></li>
                        <li><a href="{{ route('projects.index') }}" class="hover:text-white transition">{{ __('View Projects') }}</a></li>
                    @else
                        <li><a href="{{ route('login') }}" class="hover:text-white transition">{{ __('Log in') }}</a></li>
                        <li><a href="{{ route('register') }}" class="hover:text-white transition">{{ __('Register') }}</a></li>
                    @endauth
                </ul>
            </div>

            <div>
                <h3 class="text-white text-sm font-semibold uppercase tracking-wider mb-4">
                    {{ __('Legal') }}
                </h3>
                <ul class="space-y-2">
                    <li><a href="#" class="hover:text-white transition">{{ __('Privacy Policy') }}</a></li>
                    <li><a href="#" class="hover:text-white transition">{{ __('Terms of Service') }}</a></li>
                    <li><a href="#" class="hover:text-white transition">{{ __('Contact Us') }}</a></li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
            <p class="text-sm text-gray-500">
                &copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}
            </p>

            <div class="flex space-x-6 mt-4 md:mt-0">
                <a href="#" class="text-gray-400 hover:text-white transition">
                    <span class="sr-only">GitHub</span>
                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
