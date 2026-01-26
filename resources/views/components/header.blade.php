<header class="bg-white shadow p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-gray-800">{{ __('My Application') }}</h1>

    <div class="flex items-center space-x-4">
        <span class="text-sm text-gray-500">{{ __('Current Language') }}: {{ strtoupper(app()->getLocale()) }}</span>
        <select onchange="location = this.value;" class="border rounded p-1">
            <option value="{{ route('locale', 'es') }}" {{ app()->getLocale() == 'es' ? 'selected' : '' }}>🇪🇸 Español</option>
            <option value="{{ route('locale', 'en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>🇬🇧 English</option>
            <option value="{{ route('locale', 'fr') }}" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>🇫🇷 Français</option>
            <option value="{{ route('locale', 'tr') }}" {{ app()->getLocale() == 'tr' ? 'selected' : '' }}>🇹🇷 Türkçe</option>
        </select>
    </div>
</header>
