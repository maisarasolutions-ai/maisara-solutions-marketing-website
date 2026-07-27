<footer class="bg-maisara-navy-dark text-white/80 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-20 relative">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-8">
            <!-- Brand -->
            <div class="lg:col-span-1">
                <div class="flex items-center space-x-2 mb-6">
                    <div class="w-10 h-10 bg-maisara-ember rounded-xl flex items-center justify-center">
                        <span class="font-display text-lg font-bold text-white">M</span>
                    </div>
                    <div>
                        <span class="font-display text-xl font-bold text-white block">Maisara</span>
                        <span class="font-body text-xs text-white/70 tracking-wider uppercase">Solutions</span>
                    </div>
                </div>
                <p class="text-sm text-white/60 leading-relaxed mb-6">
                    {{ __('We Build. You Trust. Together We Grow.') }}
                </p>
                <p class="text-sm text-white/40">
                    {{ __('Digital transformation partner serving Cairo & Riyadh.') }}
                </p>
            </div>

            <!-- Explore -->
            <div>
                <h3 class="font-display text-base font-semibold text-maisara-ember mb-5 tracking-wide">{{ __('Explore') }}</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Services') }}</a></li>
                    <li><a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Technology') }}</a></li>
                    <li><a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Portfolio') }}</a></li>
                    <li><a href="{{ route('deployment.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Deployment') }}</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div>
                <h3 class="font-display text-base font-semibold text-maisara-ember mb-5 tracking-wide">{{ __('Content') }}</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('insights.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Insights') }}</a></li>
                    <li><a href="{{ route('press.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Press') }}</a></li>
                    <li><a href="{{ route('events.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Events') }}</a></li>
                    <li><a href="{{ route('knowledge-base.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Knowledge Base') }}</a></li>
                </ul>
            </div>

            <!-- Engage -->
            <div>
                <h3 class="font-display text-base font-semibold text-maisara-ember mb-5 tracking-wide">{{ __('Engage') }}</h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Contact') }}</a></li>
                    <li><a href="{{ route('partners.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Partners') }}</a></li>
                    <li><a href="{{ route('community.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Community') }}</a></li>
                    <li><a href="{{ route('talent.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/60 hover:text-white transition-all duration-200 hover:translate-x-1 inline-block">{{ __('Careers') }}</a></li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="mt-16 pt-10 border-t border-white/10">
            <div class="max-w-2xl mx-auto text-center">
                <h3 class="font-display text-lg font-semibold text-maisara-ember mb-3">{{ __('Stay Updated') }}</h3>
                <p class="text-sm text-white/50 mb-6">{{ __('Subscribe to our newsletter for the latest insights and updates.') }}</p>
                <form action="{{ route('insights.newsletter', ['locale' => app()->getLocale()]) }}" method="GET" class="flex gap-3 max-w-md mx-auto">
                    <input type="email" name="email" required placeholder="{{ __('Your email address') }}" class="flex-1 px-5 py-3 rounded-xl bg-white/8 border border-white/15 text-white placeholder-white/35 focus:outline-none focus:ring-2 focus:ring-maisara-ember focus:border-transparent transition-all duration-200 text-sm">
                    <button type="submit" class="btn-primary whitespace-nowrap">{{ __('Subscribe') }}</button>
                </form>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="mt-12 pt-8 border-t border-white/8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-white/40">&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}</p>
            <div class="flex gap-6">
                <a href="{{ route('trust.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/40 hover:text-white/70 transition-colors duration-200">{{ __('Trust') }}</a>
                <a href="{{ route('legal.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/40 hover:text-white/70 transition-colors duration-200">{{ __('Legal') }}</a>
                <a href="{{ route('investor.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/40 hover:text-white/70 transition-colors duration-200">{{ __('Investor') }}</a>
                <a href="{{ route('status.index', ['locale' => app()->getLocale()]) }}" class="text-sm text-white/40 hover:text-white/70 transition-colors duration-200">{{ __('System Status') }}</a>
            </div>
        </div>
    </div>
</footer>
