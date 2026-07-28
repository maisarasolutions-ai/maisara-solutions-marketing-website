@extends('layouts.app')

@section('title', __('About Us'))

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof lucide !== 'undefined') {
            lucide.createIcons();
        }
    });
</script>
@endpush

@section('content')
<!-- Hero -->
<x-modern.modern-hero
    :title="__('About Maisara Solutions')"
    :subtitle="__('A regional leader in digital transformation, combining deep Middle Eastern expertise with global best practices.')"
    :badge="__('Who We Are')"
    badgeIcon="users"
>
    <div class="flex flex-wrap gap-4 mt-10">
        <a href="{{ route('about.founder', ['locale' => app()->getLocale()]) }}" class="btn-glow">{{ __('Meet the Founder') }}</a>
        <a href="{{ route('about.team', ['locale' => app()->getLocale()]) }}" class="btn-outline">{{ __('Our Team') }}</a>
    </div>
</x-modern.modern-hero>

<!-- Mission, Vision, Values -->
<x-modern.modern-section
    :title="__('Mission, Vision & Values')"
    :subtitle="__('The principles that guide every engagement, every solution, and every relationship we build.')"
    label="{{ __('Our Foundation') }}"
    background="mesh"
    padding="large"
>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">
        <div class="glass-panel p-8 fade-up group hover:border-maisara-ember/20 transition-all duration-300">
            <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                <i data-lucide="compass" class="w-7 h-7 text-maisara-ember"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Mission') }}</h3>
            <p class="text-gray-600 leading-relaxed text-sm">
                {{ __('To empower organizations across the Middle East with transformative digital solutions that respect regional context and global standards.') }}
            </p>
        </div>
        <div class="glass-panel p-8 fade-up group hover:border-maisara-ember/20 transition-all duration-300" style="transition-delay: 100ms;">
            <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                <i data-lucide="eye" class="w-7 h-7 text-maisara-ember"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Vision') }}</h3>
            <p class="text-gray-600 leading-relaxed text-sm">
                {{ __('To be the most trusted digital transformation partner in the region, known for sovereignty, quality, and measurable client impact.') }}
            </p>
        </div>
        <div class="glass-panel p-8 fade-up group hover:border-maisara-ember/20 transition-all duration-300" style="transition-delay: 200ms;">
            <div class="w-14 h-14 bg-maisara-ember/10 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                <i data-lucide="heart" class="w-7 h-7 text-maisara-ember"></i>
            </div>
            <h3 class="font-display text-xl font-semibold text-maisara-navy mb-3">{{ __('Values') }}</h3>
            <p class="text-gray-600 leading-relaxed text-sm">
                {{ __('Excellence, integrity, collaboration, and unwavering commitment to the Middle East region and its digital future.') }}
            </p>
        </div>
    </div>
</x-modern.modern-section>

<!-- Impact Stats -->
<x-modern.modern-section background="navy" :label="__('Impact')">
    <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-8">
        <div class="text-center fade-up">
            <div class="stat-number text-4xl md:text-5xl">15+</div>
            <div class="text-white/70 text-sm mt-2">{{ __('Years of Regional Expertise') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 100ms;">
            <div class="stat-number text-4xl md:text-5xl">200+</div>
            <div class="text-white/70 text-sm mt-2">{{ __('Projects Delivered') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 200ms;">
            <div class="stat-number text-4xl md:text-5xl">98%</div>
            <div class="text-white/70 text-sm mt-2">{{ __('Client Satisfaction') }}</div>
        </div>
        <div class="text-center fade-up" style="transition-delay: 300ms;">
            <div class="stat-number text-4xl md:text-5xl">50+</div>
            <div class="text-white/70 text-sm mt-2">{{ __('Team Members') }}</div>
        </div>
    </div>
</x-modern.modern-section>

<!-- Story -->
<x-modern.modern-section
    :title="__('Our Story')"
    label="{{ __('History') }}"
    background="default"
    padding="large"
>
    <div class="split-section">
        <div class="fade-up">
            <div class="glass-panel p-8 md:p-10 h-full">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center">
                        <i data-lucide="building-2" class="w-5 h-5 text-maisara-ember"></i>
                    </div>
                    <h3 class="font-display text-xl font-semibold text-maisara-navy">{{ __('Founded in Cairo') }}</h3>
                </div>
                <p class="text-gray-600 leading-relaxed mb-4">
                    {{ __('Founded in Cairo with a vision to bridge global technology excellence with regional business realities, Maisara Solutions has grown into a trusted digital transformation partner serving clients across the Middle East and beyond.') }}
                </p>
                <p class="text-gray-600 leading-relaxed">
                    {{ __('We combine deep local expertise with international best practices to deliver solutions that are both globally competitive and regionally relevant.') }}
                </p>
            </div>
        </div>
        <div class="fade-up" style="transition-delay: 150ms;">
            <div class="grid grid-cols-1 gap-4">
                <div class="card-modern p-6 group hover:border-maisara-ember/20 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                            <i data-lucide="map-pin" class="w-5 h-5 text-maisara-ember"></i>
                        </div>
                        <div>
                            <h4 class="font-display text-base font-semibold text-maisara-navy mb-1">{{ __('Egypt') }}</h4>
                            <p class="text-sm text-gray-500">{{ __('Cairo headquarters') }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-modern p-6 group hover:border-maisara-ember/20 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                            <i data-lucide="map-pin" class="w-5 h-5 text-maisara-ember"></i>
                        </div>
                        <div>
                            <h4 class="font-display text-base font-semibold text-maisara-navy mb-1">{{ __('Saudi Arabia') }}</h4>
                            <p class="text-sm text-gray-500">{{ __('Riyadh operations') }}</p>
                        </div>
                    </div>
                </div>
                <div class="card-modern p-6 group hover:border-maisara-ember/20 transition-all duration-300">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 bg-maisara-ember/10 rounded-xl flex items-center justify-center shrink-0 group-hover:bg-maisara-ember/15 group-hover:scale-110 transition-all duration-300">
                            <i data-lucide="globe" class="w-5 h-5 text-maisara-ember"></i>
                        </div>
                        <div>
                            <h4 class="font-display text-base font-semibold text-maisara-navy mb-1">{{ __('Regional Reach') }}</h4>
                            <p class="text-sm text-gray-500">{{ __('Middle East and beyond') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-modern.modern-section>

<!-- CTA -->
<x-modern.modern-cta
    :title="__('Ready to Work Together?')"
    :subtitle="__('Let us discuss how we can help with your digital transformation goals.')"
    buttonText="{{ __('Get In Touch') }}"
    :buttonUrl="route('contact.index', ['locale' => app()->getLocale()])"
/>
@endsection
