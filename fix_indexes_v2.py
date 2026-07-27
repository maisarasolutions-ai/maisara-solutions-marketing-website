import os

BASE_DIR = r'C:\Users\maisa\Desktop\final\maisara_solutions_marketing_website\marketing_website\development\codebase'
VIEWS_DIR = os.path.join(BASE_DIR, 'resources', 'views')

index_route_map = {
    'methodology': 'methodology.index',
    'technology': 'technology.index',
    'deployment': 'deployment.index',
    'portfolio': 'portfolio.index',
    'insights': 'insights.index',
    'partners': 'partners.index',
    'events': 'events.index',
    'talent': 'talent.index',
    'knowledge-base': 'knowledge-base.index',
    'trust': 'trust.index',
    'legal': 'legal.index',
    'press': 'press.index',
    'investor': 'investor.index',
    'assessment': 'assessment.index',
    'client/onboarding': 'client.onboarding.index',
    'client/billing': 'client.billing.index',
    'client/success': 'client.success.index',
    'client/referral': 'client.referral.index',
    'community': 'community.index',
    'status': 'status.index',
}

for module_path, route_name in index_route_map.items():
    view_file = os.path.join(VIEWS_DIR, module_path, 'index.blade.php')
    
    if not os.path.exists(view_file):
        print(f"SKIP: {view_file} does not exist")
        continue
    
    module_name = module_path.split('/')[-1]
    words = route_name.replace('-', ' ').replace('.', ' ').split()
    title = ' '.join(word.capitalize() for word in words)
    module_md = route_name.replace('.', '/')
    
    content = """@extends('layouts.app')

@section('title', __('%s'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('%s') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/%s/index.md -->
                {{ __('%s overview and introduction.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Key features / content sections -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- PLACEHOLDER: Feature cards from content/%s/index.md -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Feature') }} 1</h3>
                <p class="text-gray-600">{{ __('Description of key feature and capability.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Feature') }} 2</h3>
                <p class="text-gray-600">{{ __('Description of key feature and capability.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Feature') }} 3</h3>
                <p class="text-gray-600">{{ __('Description of key feature and capability.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- PLACEHOLDER: CTA section -->
<section class="py-20 bg-maisara-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl font-bold mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
            <!-- PLACEHOLDER: CTA description -->
            {{ __("Contact us to discuss how we can help with %s.") }}
        </p>
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Contact Us') }}</a>
    </div>
</section>
@endsection
""" % (title, title, module_md, module_name.capitalize(), module_md)
    
    with open(view_file, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Updated {view_file}")

print("Done updating index views!")
