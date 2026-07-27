<header class="glass-nav text-white sticky top-0 z-50 transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 md:h-20">
            <!-- Logo -->
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="flex items-center space-x-2 group">
                <div class="w-10 h-10 bg-maisara-ember rounded-xl flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    <span class="font-display text-lg font-bold text-white">M</span>
                </div>
                <div class="leading-tight">
                    <span class="font-display text-xl font-bold text-white block">Maisara</span>
                    <span class="font-body text-xs text-white/70 tracking-wider uppercase">Solutions</span>
                </div>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-1" x-data="{ open: false }">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium">
                    {{ __('Home') }}
                </a>

                <div class="relative" x-data="{ dropdown: false }">
                    <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium flex items-center">
                        {{ __('About') }}
                        <svg class="w-4 h-4 ms-1 transition-transform duration-200" :class="dropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="dropdown" x-transition x-cloak class="absolute top-full mt-2 w-56 bg-white rounded-2xl shadow-2xl shadow-maisara-navy/10 py-2 border border-gray-100/80">
                        <a href="{{ route('about.index', ['locale' => app()->getLocale()]) }}" class="block px-5 py-2.5 text-sm text-maisara-navy hover:bg-maisara-ivory hover:text-maisara-ember transition-all duration-200 rounded-xl mx-1">{{ __('About Us') }}</a>
                        <a href="{{ route('about.team', ['locale' => app()->getLocale()]) }}" class="block px-5 py-2.5 text-sm text-maisara-navy hover:bg-maisara-ivory hover:text-maisara-ember transition-all duration-200 rounded-xl mx-1">{{ __('Team') }}</a>
                        <a href="{{ route('about.founder', ['locale' => app()->getLocale()]) }}" class="block px-5 py-2.5 text-sm text-maisara-navy hover:bg-maisara-ivory hover:text-maisara-ember transition-all duration-200 rounded-xl mx-1">{{ __('Founder') }}</a>
                    </div>
                </div>

                <div class="relative" x-data="{ dropdown: false }">
                    <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium flex items-center">
                        {{ __('Services') }}
                        <svg class="w-4 h-4 ms-1 transition-transform duration-200" :class="dropdown ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="dropdown" x-transition x-cloak class="absolute top-full mt-2 w-56 bg-white rounded-2xl shadow-2xl shadow-maisara-navy/10 py-2 border border-gray-100/80">
                        <a href="{{ route('services.advisory', ['locale' => app()->getLocale()]) }}" class="block px-5 py-2.5 text-sm text-maisara-navy hover:bg-maisara-ivory hover:text-maisara-ember transition-all duration-200 rounded-xl mx-1">{{ __('Advisory') }}</a>
                        <a href="{{ route('services.design', ['locale' => app()->getLocale()]) }}" class="block px-5 py-2.5 text-sm text-maisara-navy hover:bg-maisara-ivory hover:text-maisara-ember transition-all duration-200 rounded-xl mx-1">{{ __('Design') }}</a>
                        <a href="{{ route('services.delivery', ['locale' => app()->getLocale()]) }}" class="block px-5 py-2.5 text-sm text-maisara-navy hover:bg-maisara-ivory hover:text-maisara-ember transition-all duration-200 rounded-xl mx-1">{{ __('Delivery') }}</a>
                    </div>
                </div>

                <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium">{{ __('Technology') }}</a>
                <a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium">{{ __('Portfolio') }}</a>
                <a href="{{ route('insights.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium">{{ __('Insights') }}</a>
                <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200 font-medium">{{ __('Contact') }}</a>
            </nav>

            <!-- Right Actions -->
            <div class="hidden lg:flex items-center space-x-1">
                <div class="flex items-center bg-white/10 rounded-lg p-0.5 mr-2">
                    <button onclick="toggleLanguage('en')" @if(app()->getLocale() === 'en') class="bg-maisara-ember text-white px-2.5 py-1.5 rounded-md text-xs font-bold transition-all duration-200" @else class="text-white/70 hover:text-white px-2.5 py-1.5 text-xs transition-all duration-200" @endif>
                        {{ __('EN') }}
                    </button>
                    <button onclick="toggleLanguage('ar')" @if(app()->getLocale() === 'ar') class="bg-maisara-ember text-white px-2.5 py-1.5 rounded-md text-xs font-bold transition-all duration-200" @else class="text-white/70 hover:text-white px-2.5 py-1.5 text-xs transition-all duration-200" @endif>
                        {{ __('AR') }}
                    </button>
                </div>
                <a href="{{ route('client.login', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200">{{ __('Client Portal') }}</a>
                <a href="{{ route('status.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/90 hover:text-maisara-ember px-3 py-2 rounded-lg hover:bg-white/5 transition-all duration-200">{{ __('System Status') }}</a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="toggleMobileMenu()" class="lg:hidden text-white p-2 rounded-lg hover:bg-white/10 transition-all duration-200">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4 space-y-1">
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block py-2.5 px-3 text-white/90 hover:text-maisara-ember hover:bg-white/5 rounded-lg transition-all duration-200">{{ __('Home') }}</a>
            <a href="{{ route('about.index', ['locale' => app()->getLocale()]) }}" class="block py-2.5 px-3 text-white/90 hover:text-maisara-ember hover:bg-white/5 rounded-lg transition-all duration-200">{{ __('About') }}</a>
            <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="block py-2.5 px-3 text-white/90 hover:text-maisara-ember hover:bg-white/5 rounded-lg transition-all duration-200">{{ __('Services') }}</a>
            <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="block py-2.5 px-3 text-white/90 hover:text-maisara-ember hover:bg-white/5 rounded-lg transition-all duration-200">{{ __('Technology') }}</a>
            <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="block py-2.5 px-3 text-white/90 hover:text-maisara-ember hover:bg-white/5 rounded-lg transition-all duration-200">{{ __('Contact') }}</a>
        </div>
    </div>
</header>
