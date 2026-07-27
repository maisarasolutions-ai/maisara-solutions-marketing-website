<div class="flex flex-col sm:flex-row gap-4">
    <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'sovereign']) }}" class="p-4 border-2 border-maisara-ember rounded-lg hover:bg-maisara-ember hover:text-white transition-colors text-center">
        <h4 class="font-semibold">{{ __('Sovereign Professional') }}</h4>
        <p class="text-sm opacity-80">{{ __('Enterprise-grade advisory') }}</p>
    </a>
    <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'emerging']) }}" class="p-4 border-2 border-maisara-ember rounded-lg hover:bg-maisara-ember hover:text-white transition-colors text-center">
        <h4 class="font-semibold">{{ __('Emerging Venture') }}</h4>
        <p class="text-sm opacity-80">{{ __('Growth-focused solutions') }}</p>
    </a>
    <a href="{{ route('home', ['locale' => app()->getLocale(), 'segment' => 'established']) }}" class="p-4 border-2 border-maisara-ember rounded-lg hover:bg-maisara-ember hover:text-white transition-colors text-center">
        <h4 class="font-semibold">{{ __('Established Service') }}</h4>
        <p class="text-sm opacity-80">{{ __('Streamlined operations') }}</p>
    </a>
</div>
