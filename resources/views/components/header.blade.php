<header class="bg-purple-100 shadow-sm border-b border-purple-200 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">

        <h1 class="text-lg font-bold text-purple-900">
            {{ __('My Application') }}
        </h1>

        <div class="flex items-center space-x-2">
            <span class="text-xs text-purple-700 uppercase font-bold hidden sm:inline">{{ __('Current Language') }}:</span>

            <div class="relative">
                <select onchange="window.location.href = this.value;"
                        class="appearance-none bg-white border border-purple-300 text-gray-700 py-1 pl-3 pr-8 rounded leading-tight focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent text-sm cursor-pointer shadow-sm">
                    <option value="{{ route('locale', 'es') }}" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>🇪🇸 Español</option>
                    <option value="{{ route('locale', 'en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇬🇧 English</option>
                    <option value="{{ route('locale', 'fr') }}" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>🇫🇷 Français</option>
                    <option value="{{ route('locale', 'tr') }}" {{ app()->getLocale() == 'tr' ? 'selected' : '' }}>🇹🇷 Türkçe</option>
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-purple-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                </div>
            </div>
        </div>
    </div>
</header>
