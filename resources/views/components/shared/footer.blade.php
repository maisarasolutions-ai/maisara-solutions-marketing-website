<footer class="bg-maisara-navy-dark text-white/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Explore -->
            <div>
                <h3 class="font-display text-lg font-semibold text-maisara-ember mb-4">{{ __('Explore') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('services.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Services') }}</a></li>
                    <li><a href="{{ route('technology.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Technology') }}</a></li>
                    <li><a href="{{ route('portfolio.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Portfolio') }}</a></li>
                    <li><a href="{{ route('deployment.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Deployment') }}</a></li>
                </ul>
            </div>

            <!-- Content -->
            <div>
                <h3 class="font-display text-lg font-semibold text-maisara-ember mb-4">{{ __('Content') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('insights.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Insights') }}</a></li>
                    <li><a href="{{ route('press.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Press') }}</a></li>
                    <li><a href="{{ route('events.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Events') }}</a></li>
                    <li><a href="{{ route('knowledge-base.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Knowledge Base') }}</a></li>
                </ul>
            </div>

            <!-- Engage -->
            <div>
                <h3 class="font-display text-lg font-semibold text-maisara-ember mb-4">{{ __('Engage') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Contact') }}</a></li>
                    <li><a href="{{ route('partners.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Partners') }}</a></li>
                    <li><a href="{{ route('community.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Community') }}</a></li>
                    <li><a href="{{ route('talent.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Careers') }}</a></li>
                </ul>
            </div>

            <!-- Trust & Legal -->
            <div>
                <h3 class="font-display text-lg font-semibold text-maisara-ember mb-4">{{ __('Trust & Legal') }}</h3>
                <ul class="space-y-2">
                    <li><a href="{{ route('trust.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Trust') }}</a></li>
                    <li><a href="{{ route('legal.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Legal') }}</a></li>
                    <li><a href="{{ route('investor.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('Investor') }}</a></li>
                    <li><a href="{{ route('status.index', ['locale' => app()->getLocale()]) }}" class="text-sm hover:text-maisara-ember transition-colors">{{ __('System Status') }}</a></li>
                </ul>
            </div>
        </div>

        <!-- Newsletter -->
        <div class="border-t border-white/10 mt-12 pt-8">
            <div class="max-w-xl mx-auto text-center">
                <h3 class="font-display text-lg font-semibold text-maisara-ember mb-2">{{ __('Stay Updated') }}</h3>
                <p class="text-sm text-white/60 mb-4">{{ __('Subscribe to our newsletter for the latest insights and updates.') }}</p>
                <form action="{{ route('insights.newsletter', ['locale' => app()->getLocale()]) }}" method="GET" class="flex gap-2">
                    <input type="email" name="email" required placeholder="{{ __('Your email address') }}" class="flex-1 px-4 py-2 rounded-lg bg-white/10 border border-white/20 text-white placeholder-white/40 focus:outline-none focus:ring-2 focus:ring-maisara-ember">
                    <button type="submit" class="btn-primary">{{ __('Subscribe') }}</button>
                </form>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-t border-white/10 mt-8 pt-8 text-center text-sm text-white/50">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('All rights reserved.') }}</p>
            <p class="mt-1">{{ __('Operated from Cairo, Egypt & Riyadh, Saudi Arabia') }}</p>
        </div>
    </div>
</footer>
