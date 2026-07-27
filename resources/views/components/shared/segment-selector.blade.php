<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
    <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'sovereign']) }}" class="card fade-in text-center group hover:border-maisara-ember/40 hover:shadow-2xl hover:shadow-maisara-ember/10">
        <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
            <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
            </svg>
        </div>
        <h4 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Sovereign Professional') }}</h4>
        <p class="text-sm text-gray-500 leading-relaxed">{{ __('Enterprise-grade advisory') }}</p>
    </a>
    <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'emerging']) }}" class="card fade-in text-center group hover:border-maisara-ember/40 hover:shadow-2xl hover:shadow-maisara-ember/10">
        <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
            <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
            </svg>
        </div>
        <h4 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Emerging Venture') }}</h4>
        <p class="text-sm text-gray-500 leading-relaxed">{{ __('Growth-focused solutions') }}</p>
    </a>
    <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'established']) }}" class="card fade-in text-center group hover:border-maisara-ember/40 hover:shadow-2xl hover:shadow-maisara-ember/10">
        <div class="w-12 h-12 bg-maisara-ember/10 rounded-xl flex items-center justify-center mx-auto mb-4 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
            <svg class="w-6 h-6 text-maisara-ember" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
            </svg>
        </div>
        <h4 class="font-display text-lg font-semibold text-maisara-navy mb-2">{{ __('Established Service') }}</h4>
        <p class="text-sm text-gray-500 leading-relaxed">{{ __('Streamlined operations') }}</p>
    </a>
</div>
