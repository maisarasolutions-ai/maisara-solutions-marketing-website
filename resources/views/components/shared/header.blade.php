<header class="bg-maisara-navy text-white sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="flex items-center space-x-2">
                <span class="font-display text-xl font-bold text-maisara-ember">Maisara</span>
                <span class="font-body text-sm text-white/80">Solutions</span>
            </a>

            <!-- Desktop Navigation -->
            <nav class="hidden lg:flex items-center space-x-6" x-data="{ open: false }">
                <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember transition-colors">
                    {{ __('Home') }}
                </a>

                <div class="relative" x-data="{ dropdown: false }">
                    <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="text-white/90 hover:text-maisara-ember transition-colors flex items-center">
                        {{ __('About') }}
                        <svg class="w-4 h-4 ms-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="dropdown" x-transition class="absolute top-full mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                        <a href="{{ route('about.index', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-sm text-maisara-navy hover:bg-maisara-ivory">{{ __('About Us') }}</a>
                        <a href="{{ route('about.team', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-sm text-maisara-navy hover:bg-maisara-ivory">{{ __('Team') }}</a>
                        <a href="{{ route('about.founder', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-sm text-maisara-navy hover:bg-maisara-ivory">{{ __('Founder') }}</a>
                    </div>
                </div>

                <div class="relative" x-data="{ dropdown: false }">
                    <button @click="dropdown = !dropdown" @click.away="dropdown = false" class="text-white/90 hover:text-maisara-ember transition-colors flex items-center">
                        {{ __('Services') }}
                        <svg class="w-4 h-4 ms-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                    <div x-show="dropdown" x-transition class="absolute top-full mt-2 w-48 bg-white rounded-lg shadow-lg py-2">
                        <a href="{{ route('services.advisory', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-sm text-maisara-navy hover:bg-maisara-ivory">{{ __('Advisory') }}</a>
                        <a href="{{ route('services.design', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-sm text-maisara-navy hover:bg-maisara-ivory">{{ __('Design') }}</a>
                        <a href="{{ route('services.delivery', ['locale' => app()->getLocale()]) }}" class="block px-4 py-2 text-sm text-maisara-navy hover:bg-maisara-ivory">{{ __('Delivery') }}</a>
                    </div>
                </div>

                <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember transition-colors">{{ __('Technology') }}</a>
                <a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember transition-colors">{{ __('Portfolio') }}</a>
                <a href="{{ route('insights.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember transition-colors">{{ __('Insights') }}</a>
                <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="text-white/90 hover:text-maisara-ember transition-colors">{{ __('Contact') }}</a>
            </nav>

            <!-- Right Actions -->
            <div class="hidden lg:flex items-center space-x-4">
                @include('components.shared.language-toggle')
                <a href="{{ route('client.login', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/90 hover:text-maisara-ember transition-colors">{{ __('Client Portal') }}</a>
                <a href="{{ route('status.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/90 hover:text-maisara-ember transition-colors">{{ __('System Status') }}</a>
            </div>

            <!-- Mobile Menu Button -->
            <button @click="toggleMobileMenu()" class="lg:hidden text-white p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden pb-4">
            <a href="{{ route('home', ['locale' => app()->getLocale()]) }}" class="block py-2 text-white/90 hover:text-maisara-ember">{{ __('Home') }}</a>
            <a href="{{ route('about.index', ['locale' => app()->getLocale()]) }}" class="block py-2 text-white/90 hover:text-maisara-ember">{{ __('About') }}</a>
            <a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="block py-2 text-white/90 hover:text-maisara-ember">{{ __('Services') }}</a>
            <a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="block py-2 text-white/90 hover:text-maisara-ember">{{ __('Technology') }}</a>
            <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="block py-2 text-white/90 hover:text-maisara-ember">{{ __('Contact') }}</a>
        </div>
    </div>
</header>
