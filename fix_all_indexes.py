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

# Specialized content for specific modules
specialized = {
    'methodology': {
        'title': 'Methodology',
        'h1': 'Methodology',
        'description': 'Our proven approach to digital transformation.',
        'extra_sections': '''
<!-- PLACEHOLDER: Process Overview -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Our Process') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- PLACEHOLDER: content/methodology/index.md process steps -->
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">1</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Discovery') }}</h3>
                <p class="text-gray-600">{{ __('Understanding your needs and goals.') }}</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">2</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Co-design') }}</h3>
                <p class="text-gray-600">{{ __('Collaborative solution design.') }}</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">3</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Delivery') }}</h3>
                <p class="text-gray-600">{{ __('Implementation with transparency.') }}</p>
            </div>
            <div class="text-center">
                <div class="w-12 h-12 bg-maisara-ember text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold">4</div>
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Support') }}</h3>
                <p class="text-gray-600">{{ __('Ongoing enablement and optimization.') }}</p>
            </div>
        </div>
    </div>
</section>

<!-- PLACEHOLDER: Timeline -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Project Timeline') }}</h2>
        <div class="max-w-4xl mx-auto">
            <!-- PLACEHOLDER: content/methodology/index.md timeline -->
            <div class="relative">
                <div class="absolute left-1/2 transform -translate-x-1/2 h-full w-0.5 bg-maisara-ember"></div>
                <div class="space-y-8">
                    <div class="flex items-center">
                        <div class="w-1/2 text-right pr-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 1-2') }}</h4>
                            <p class="text-gray-600">{{ __('Discovery & Scoping') }}</p>
                        </div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2 text-left pl-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 3-6') }}</h4>
                            <p class="text-gray-600">{{ __('Co-design & Governance') }}</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2 text-right pr-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 7-12') }}</h4>
                            <p class="text-gray-600">{{ __('Development & QA') }}</p>
                        </div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2"></div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-1/2"></div>
                        <div class="w-4 h-4 bg-maisara-ember rounded-full relative z-10"></div>
                        <div class="w-1/2 text-left pl-8">
                            <h4 class="font-semibold text-maisara-navy">{{ __('Weeks 13+') }}</h4>
                            <p class="text-gray-600">{{ __('Launch & Knowledge Transfer') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
''',
        'cta_link': "route('contact.booking', ['locale' => app()->getLocale()])",
        'cta_text': "Book a Consultation",
    },
    'technology': {
        'title': 'Technology',
        'h1': 'Technology',
        'description': 'Our technology stack and capabilities.',
        'extra_sections': '''
<!-- PLACEHOLDER: Architecture Philosophy -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Architecture Philosophy') }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Open Foundations') }}</h3>
                <p class="text-gray-600">{{ __('Built on open standards and vendor-neutral protocols to avoid lock-in.') }}</p>
            </div>
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Security by Design') }}</h3>
                <p class="text-gray-600">{{ __('Every layer designed with sovereignty, encryption, and isolation in mind.') }}</p>
            </div>
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Arabic-First') }}</h3>
                <p class="text-gray-600">{{ __('Native RTL support and Arabic NLP as core capabilities.') }}</p>
            </div>
            <div class="bg-maisara-ivory rounded-xl p-8">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-4">{{ __('Scalable by Default') }}</h3>
                <p class="text-gray-600">{{ __('Architectures that grow with your business, not against it.') }}</p>
            </div>
        </div>
    </div>
</section>
''',
        'cta_link': "route('technology.index', ['locale' => app()->getLocale()])",
        'cta_text': "Explore Technology",
    },
    'deployment': {
        'title': 'Deployment',
        'h1': 'Deployment',
        'description': 'Flexible deployment models tailored to your needs.',
        'extra_sections': '''
<!-- PLACEHOLDER: Comparison Intro -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Deployment Models') }}</h2>
        <p class="text-xl text-gray-600 max-w-3xl mx-auto text-center mb-8">
            <!-- PLACEHOLDER: content/deployment/index.md comparison intro -->
            {{ __('From advisory sprints to full managed operations, we adapt to your operational maturity.') }}
        </p>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Advisory') }}</h3>
                <p class="text-gray-600">{{ __('Expert guidance for self-managed teams.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Co-managed') }}</h3>
                <p class="text-gray-600">{{ __('Shared responsibility for operational excellence.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6 text-center">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Managed') }}</h3>
                <p class="text-gray-600">{{ __('Fully managed operations with SLA-backed reliability.') }}</p>
            </div>
        </div>
    </div>
</section>
''',
        'cta_link': "route('deployment.comparison', ['locale' => app()->getLocale()])",
        'cta_text': "Compare Models",
    },
    'portfolio': {
        'title': 'Portfolio',
        'h1': 'Portfolio',
        'description': 'Case studies and evidence of our work.',
        'extra_sections': '''
<!-- PLACEHOLDER: Filter Tabs -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="font-display text-3xl font-bold text-center text-maisara-navy mb-12">{{ __('Case Studies') }}</h2>
        <div class="flex flex-wrap justify-center gap-4 mb-12">
            <!-- PLACEHOLDER: content/portfolio/index.md filter tabs -->
            <button class="px-6 py-2 bg-maisara-navy text-white rounded-full">{{ __('All') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-colors">{{ __('Sovereign') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-colors">{{ __('Emerging') }}</button>
            <button class="px-6 py-2 border border-maisara-navy text-maisara-navy rounded-full hover:bg-maisara-navy hover:text-white transition-colors">{{ __('Established') }}</button>
        </div>
        <!-- PLACEHOLDER: Case study grid from content/portfolio/index.md -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-maisara-ivory"></div>
                <div class="p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 1</h3>
                    <p class="text-gray-600">{{ __('Transformation story for a regional leader.') }}</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-maisara-ivory"></div>
                <div class="p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 2</h3>
                    <p class="text-gray-600">{{ __('Growth-focused solution for an emerging venture.') }}</p>
                </div>
            </div>
            <div class="bg-white rounded-xl shadow-md overflow-hidden">
                <div class="h-48 bg-maisara-ivory"></div>
                <div class="p-6">
                    <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Case Study') }} 3</h3>
                    <p class="text-gray-600">{{ __('Streamlined operations for an established service.') }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
''',
        'cta_link': "route('portfolio.case-studies', ['locale' => app()->getLocale()])",
        'cta_text': "View All Case Studies",
    },
}

for module_path, route_name in index_route_map.items():
    view_file = os.path.join(VIEWS_DIR, module_path, 'index.blade.php')
    
    if not os.path.exists(view_file):
        print(f"SKIP: {view_file} does not exist")
        continue
    
    module_name = module_path.split('/')[-1]
    
    if module_path in specialized:
        cfg = specialized[module_path]
        title = cfg['title']
        h1 = cfg['h1']
        description = cfg['description']
        extra = cfg['extra_sections']
        cta_link = cfg['cta_link']
        cta_text = cfg['cta_text']
    else:
        words = route_name.replace('-', ' ').replace('.', ' ').split()
        title = ' '.join(word.capitalize() for word in words)
        h1 = title
        description = '%s overview and introduction.' % module_name.capitalize()
        extra = '''
<!-- PLACEHOLDER: Key features / content sections -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- PLACEHOLDER: Feature cards from content/methodology/index.md -->
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
'''
        cta_link = "route('contact.index', ['locale' => app()->getLocale()])"
        cta_text = "Contact Us"
    
    content = """@extends('layouts.app')

@section('title', __('%s'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('%s') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: %s -->
                {{ __('%s') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>
%s
<!-- PLACEHOLDER: CTA section -->
<section class="py-20 bg-maisara-navy text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="font-display text-3xl font-bold mb-6">{{ __('Ready to Learn More?') }}</h2>
        <p class="text-xl text-white/80 mb-8 max-w-3xl mx-auto">
            <!-- PLACEHOLDER: CTA description -->
            {{ __('Contact us to discuss how we can help with your needs.') }}
        </p>
        <a href="{{ %s }}" class="btn-primary">{{ __('%s') }}</a>
    </div>
</section>
@endsection
""" % (title, h1, module_name.capitalize(), description.replace('%', '%%'), extra, cta_link, cta_text)
    
    with open(view_file, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Updated {view_file}")

print("Done!")
