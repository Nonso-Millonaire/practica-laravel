<header class="bg-purple-100 shadow-sm border-b border-purple-200 relative z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex justify-between items-center">

        <h1 class="text-lg font-bold text-purple-900">
            {{ __('My Application') }}
        </h1>

        <div class="flex items-center space-x-2">
            <span class="text-xs text-purple-700 uppercase font-bold hidden sm:inline">{{ __('Current Language') }}:</span>

            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" @click.outside="open = false" class="flex items-center space-x-2 bg-white border border-purple-300 text-gray-700 py-1.5 px-3 rounded shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500 text-sm">
                    @switch(app()->getLocale())
                        @case('es')
                            <img src="https://flagcdn.com/w20/es.png" srcset="https://flagcdn.com/w40/es.png 2x" width="20" alt="Spain">
                            <span>Español</span>
                            @break
                        @case('en')
                            <img src="https://flagcdn.com/w20/gb.png" srcset="https://flagcdn.com/w40/gb.png 2x" width="20" alt="United Kingdom">
                            <span>English</span>
                            @break
                        @case('fr')
                            <img src="https://flagcdn.com/w20/fr.png" srcset="https://flagcdn.com/w40/fr.png 2x" width="20" alt="France">
                            <span>Français</span>
                            @break
                        @case('tr')
                            <img src="https://flagcdn.com/w20/tr.png" srcset="https://flagcdn.com/w40/tr.png 2x" width="20" alt="Turkey">
                            <span>Türkçe</span>
                            @break
                    @endswitch

                    <svg class="w-4 h-4 ml-1 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <div x-show="open"
                     x-transition:enter="transition ease-out duration-100"
                     x-transition:enter-start="transform opacity-0 scale-95"
                     x-transition:enter-end="transform opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-75"
                     x-transition:leave-start="transform opacity-100 scale-100"
                     x-transition:leave-end="transform opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg py-1 z-50 border border-gray-100"
                     style="display: none;">

                    <a href="{{ route('locale', 'es') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">
                        <img src="https://flagcdn.com/w20/es.png" class="mr-3" width="20" alt="ES">
                        Español
                    </a>

                    <a href="{{ route('locale', 'en') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">
                        <img src="https://flagcdn.com/w20/gb.png" class="mr-3" width="20" alt="GB">
                        English
                    </a>

                    <a href="{{ route('locale', 'fr') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">
                        <img src="https://flagcdn.com/w20/fr.png" class="mr-3" width="20" alt="FR">
                        Français
                    </a>

                    <a href="{{ route('locale', 'tr') }}" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-purple-50 hover:text-purple-700 transition">
                        <img src="https://flagcdn.com/w20/tr.png" class="mr-3" width="20" alt="TR">
                        Türkçe
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
