import os
import re

BASE_DIR = r'C:\Users\maisa\Desktop\final\maisara_solutions_marketing_website\marketing_website\development\codebase'
VIEWS_DIR = os.path.join(BASE_DIR, 'resources', 'views')
ROUTES_FILE = os.path.join(BASE_DIR, 'routes', 'web.php')

# Define all modules and their sub-pages
# Format: module_key -> { 'controller': ..., 'namespace': ..., 'pages': { route_name: view_path } }
modules = {}

# Module 4 - Methodology
modules['methodology'] = {
    'controller': 'MethodologyController',
    'pages': {
        'methodology.discovery': 'methodology.discovery',
        'methodology.scoping': 'methodology.scoping',
        'methodology.co-design': 'methodology.co-design',
        'methodology.governance': 'methodology.governance',
        'methodology.qa': 'methodology.qa',
        'methodology.arabic-quality': 'methodology.arabic-quality',
        'methodology.knowledge-transfer': 'methodology.knowledge-transfer',
        'methodology.post-launch': 'methodology.post-launch',
        'methodology.escalation': 'methodology.escalation',
        'methodology.technology-integration': 'methodology.technology-integration',
    }
}

# Module 5 - Technology
modules['technology'] = {
    'controller': 'TechnologyController',
    'pages': {
        'technology.architecture-philosophy': 'technology.architecture-philosophy',
        'technology.sovereign-infrastructure': 'technology.sovereign-infrastructure',
        'technology.isolation': 'technology.isolation',
        'technology.arabic-first': 'technology.arabic-first',
        'technology.ai-delivery': 'technology.ai-delivery',
        'technology.security': 'technology.security',
        'technology.scalability': 'technology.scalability',
        'technology.performance': 'technology.performance',
        'technology.open-foundations': 'technology.open-foundations',
        'technology.ecosystem': 'technology.ecosystem',
    }
}

# Module 6 - Deployment
modules['deployment'] = {
    'controller': 'DeploymentController',
    'pages': {
        'deployment.comparison': 'deployment.comparison',
        'deployment.suitability': 'deployment.suitability',
        'deployment.tco': 'deployment.tco',
        'deployment.autonomy': 'deployment.autonomy',
        'deployment.timeline': 'deployment.timeline',
        'deployment.migration': 'deployment.migration',
        'deployment.feature-parity': 'deployment.feature-parity',
        'deployment.reference-cases': 'deployment.reference-cases',
        'deployment.advisory-booking': 'deployment.advisory-booking',
    }
}

# Module 7 - Portfolio
modules['portfolio'] = {
    'controller': 'PortfolioController',
    'pages': {
        'portfolio.case-studies': 'portfolio.case-studies',
        'portfolio.advisory-journals': 'portfolio.advisory-journals',
        'portfolio.implementation-evidence': 'portfolio.implementation-evidence',
        'portfolio.outcomes': 'portfolio.outcomes',
        'portfolio.perspective': 'portfolio.perspective',
        'portfolio.technology-story': 'portfolio.technology-story',
        'portfolio.client-narratives': 'portfolio.client-narratives',
        'portfolio.authority': 'portfolio.authority',
        'portfolio.evolution': 'portfolio.evolution',
        'portfolio.confidentiality': 'portfolio.confidentiality',
    }
}

# Module 8 - Insights
modules['insights'] = {
    'controller': 'InsightsController',
    'pages': {
        'insights.thought-leadership': 'insights.thought-leadership',
        'insights.perspectives': 'insights.perspectives',
        'insights.intelligence': 'insights.intelligence',
        'insights.success-stories': 'insights.success-stories',
        'insights.resources': 'insights.resources',
        'insights.newsletter': 'insights.newsletter',
    }
}

# Module 9 - Partners
modules['partners'] = {
    'controller': 'PartnersController',
    'pages': {
        'partners.technology-alliances': 'partners.technology-alliances',
        'partners.innovation-hubs': 'partners.innovation-hubs',
        'partners.coworking-networks': 'partners.coworking-networks',
        'partners.professional-services': 'partners.professional-services',
        'partners.referral-programme': 'partners.referral-programme',
        'partners.joint-models': 'partners.joint-models',
        'partners.success-co-narratives': 'partners.success-co-narratives',
        'partners.apply': 'partners.apply',
        'partners.resources': 'partners.resources',
        'partners.local-presence': 'partners.local-presence',
    }
}

# Module 10 - Events
modules['events'] = {
    'controller': 'EventsController',
    'pages': {
        'events.calendar': 'events.calendar',
        'events.webinars': 'events.webinars',
        'events.workshops': 'events.workshops',
        'events.roundtables': 'events.roundtables',
        'events.speaking-requests': 'events.speaking-requests',
        'events.library': 'events.library',
    }
}

# Module 11 - Talent
modules['talent'] = {
    'controller': 'TalentController',
    'pages': {
        'talent.open-positions': 'talent.open-positions',
        'talent.career-pathways': 'talent.career-pathways',
        'talent.apply': 'talent.apply',
        'talent.values-in-practice': 'talent.values-in-practice',
        'talent.work-model': 'talent.work-model',
        'talent.specialist-network': 'talent.specialist-network',
        'talent.internships': 'talent.internships',
        'talent.benefits': 'talent.benefits',
        'talent.diversity': 'talent.diversity',
    }
}

# Module 12 - Knowledge Base
modules['knowledge-base'] = {
    'controller': 'KnowledgeBaseController',
    'pages': {
        'knowledge-base.faq-segments': 'knowledge-base.faq-segments',
        'knowledge-base.readiness': 'knowledge-base.readiness',
        'knowledge-base.models-comparison': 'knowledge-base.models-comparison',
        'knowledge-base.architecture': 'knowledge-base.architecture',
        'knowledge-base.discovery-prep': 'knowledge-base.discovery-prep',
    }
}

# Module 13 - Trust
modules['trust'] = {
    'controller': 'TrustController',
    'pages': {
        'trust.data-sovereignty': 'trust.data-sovereignty',
        'trust.security-posture': 'trust.security-posture',
        'trust.backup-recovery': 'trust.backup-recovery',
        'trust.privacy-policy': 'trust.privacy-policy',
        'trust.regional-compliance': 'trust.regional-compliance',
    }
}

# Module 15 - Legal
modules['legal'] = {
    'controller': 'LegalController',
    'pages': {
        'legal.agreement-templates': 'legal.agreement-templates',
        'legal.service-terms': 'legal.service-terms',
        'legal.privacy-policy': 'legal.privacy-policy',
        'legal.subscription-terms': 'legal.subscription-terms',
    }
}

# Module 16 - Press
modules['press'] = {
    'controller': 'PressController',
    'pages': {
        'press.press-kit': 'press.press-kit',
        'press.news': 'press.news',
        'press.commentary': 'press.commentary',
        'press.inquiries': 'press.inquiries',
    }
}

# Module 17 - Investor
modules['investor'] = {
    'controller': 'InvestorController',
    'pages': {
        'investor.thesis': 'investor.thesis',
        'investor.economics': 'investor.economics',
        'investor.trajectory': 'investor.trajectory',
        'investor.market': 'investor.market',
    }
}

# Module 18 - Assessment
modules['assessment'] = {
    'controller': 'AssessmentController',
    'pages': {
        'assessment.maturity': 'assessment.maturity',
        'assessment.deployment-suitability': 'assessment.deployment-suitability',
        'assessment.arabic-readiness': 'assessment.arabic-readiness',
        'assessment.advisory-readiness': 'assessment.advisory-readiness',
        'assessment.segment-identifier': 'assessment.segment-identifier',
    }
}

# Module 19 - Client Onboarding
modules['onboarding'] = {
    'controller': 'OnboardingController',
    'pages': {
        'client.onboarding.welcome': 'client.onboarding.welcome',
        'client.onboarding.platform-access': 'client.onboarding.platform-access',
        'client.onboarding.kickoff': 'client.onboarding.kickoff',
        'client.onboarding.timeline': 'client.onboarding.timeline',
        'client.onboarding.training': 'client.onboarding.training',
    }
}

# Module 20 - Billing
modules['billing'] = {
    'controller': 'BillingController',
    'pages': {
        'client.billing.plan-overview': 'client.billing.plan-overview',
        'client.billing.invoices': 'client.billing.invoices',
        'client.billing.payment-methods': 'client.billing.payment-methods',
        'client.billing.plan-modification': 'client.billing.plan-modification',
    }
}

# Module 21 - Client Success
modules['success'] = {
    'controller': 'SuccessController',
    'pages': {
        'client.success.dashboard': 'client.success.dashboard',
        'client.success.advisory-booking': 'client.success.advisory-booking',
        'client.success.requests': 'client.success.requests',
        'client.success.reports': 'client.success.reports',
    }
}

# Module 22 - Referral
modules['referral'] = {
    'controller': 'ReferralController',
    'pages': {
        'client.referral.program-overview': 'client.referral.program-overview',
        'client.referral.submit': 'client.referral.submit',
        'client.referral.track': 'client.referral.track',
        'client.referral.recognition': 'client.referral.recognition',
    }
}

# Module 23 - Community
modules['community'] = {
    'controller': 'CommunityController',
    'pages': {
        'community.forums': 'community.forums',
        'community.office-hours': 'community.office-hours',
        'community.sharing': 'community.sharing',
        'community.regional': 'community.regional',
    }
}

# Module 24 - Status
modules['status'] = {
    'controller': 'StatusController',
    'pages': {
        'status.dashboard': 'status.dashboard',
        'status.incidents': 'status.incidents',
        'status.maintenance': 'status.maintenance',
        'status.uptime': 'status.uptime',
    }
}

# Route path mapping from route name to URL path and method name
route_path_map = {}

# Methodology routes
for page_key in ['discovery', 'scoping', 'co-design', 'governance', 'qa', 'arabic-quality', 'knowledge-transfer', 'post-launch', 'escalation', 'technology-integration']:
    route_name = f'methodology.{page_key}'
    route_path_map[route_name] = {
        'path': f'/methodology/{page_key}',
        'method': page_key.replace('-', ''),
    }

# Technology routes
for page_key in ['architecture-philosophy', 'sovereign-infrastructure', 'isolation', 'arabic-first', 'ai-delivery', 'security', 'scalability', 'performance', 'open-foundations', 'ecosystem']:
    route_name = f'technology.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/technology/{page_key}',
        'method': method_name,
    }

# Deployment routes
for page_key in ['comparison', 'suitability', 'tco', 'autonomy', 'timeline', 'migration', 'feature-parity', 'reference-cases', 'advisory-booking']:
    route_name = f'deployment.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/deployment/{page_key}',
        'method': method_name,
    }

# Portfolio routes
for page_key in ['case-studies', 'advisory-journals', 'implementation-evidence', 'outcomes', 'perspective', 'technology-story', 'client-narratives', 'authority', 'evolution', 'confidentiality']:
    route_name = f'portfolio.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/portfolio/{page_key}',
        'method': method_name,
    }

# Insights routes
for page_key in ['thought-leadership', 'perspectives', 'intelligence', 'success-stories', 'resources', 'newsletter']:
    route_name = f'insights.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/insights/{page_key}',
        'method': method_name,
    }

# Partners routes
for page_key in ['technology-alliances', 'innovation-hubs', 'coworking-networks', 'professional-services', 'referral-programme', 'joint-models', 'success-co-narratives', 'apply', 'resources', 'local-presence']:
    route_name = f'partners.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/partners/{page_key}',
        'method': method_name,
    }

# Events routes
for page_key in ['calendar', 'webinars', 'workshops', 'roundtables', 'speaking-requests', 'library']:
    route_name = f'events.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/events/{page_key}',
        'method': method_name,
    }

# Talent routes
for page_key in ['open-positions', 'career-pathways', 'apply', 'values-in-practice', 'work-model', 'specialist-network', 'internships', 'benefits', 'diversity']:
    route_name = f'talent.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/talent/{page_key}',
        'method': method_name,
    }

# Knowledge Base routes
for page_key in ['faq-segments', 'readiness', 'models-comparison', 'architecture', 'discovery-prep']:
    route_name = f'knowledge-base.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/knowledge-base/{page_key}',
        'method': method_name,
    }

# Trust routes
for page_key in ['data-sovereignty', 'security-posture', 'backup-recovery', 'privacy-policy', 'regional-compliance']:
    route_name = f'trust.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/trust/{page_key}',
        'method': method_name,
    }

# Legal routes
for page_key in ['agreement-templates', 'service-terms', 'privacy-policy', 'subscription-terms']:
    route_name = f'legal.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/legal/{page_key}',
        'method': method_name,
    }

# Press routes
for page_key in ['press-kit', 'news', 'commentary', 'inquiries']:
    route_name = f'press.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/press/{page_key}',
        'method': method_name,
    }

# Investor routes
for page_key in ['thesis', 'economics', 'trajectory', 'market']:
    route_name = f'investor.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/investor/{page_key}',
        'method': method_name,
    }

# Assessment routes
for page_key in ['maturity', 'deployment-suitability', 'arabic-readiness', 'advisory-readiness', 'segment-identifier']:
    route_name = f'assessment.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/assessment/{page_key}',
        'method': method_name,
    }

# Client Onboarding routes
for page_key in ['welcome', 'platform-access', 'kickoff', 'timeline', 'training']:
    route_name = f'client.onboarding.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/client/onboarding/{page_key}',
        'method': method_name,
    }

# Billing routes
for page_key in ['plan-overview', 'invoices', 'payment-methods', 'plan-modification']:
    route_name = f'client.billing.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/client/billing/{page_key}',
        'method': method_name,
    }

# Client Success routes
for page_key in ['dashboard', 'advisory-booking', 'requests', 'reports']:
    route_name = f'client.success.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/client/success/{page_key}',
        'method': method_name,
    }

# Referral routes
for page_key in ['program-overview', 'submit', 'track', 'recognition']:
    route_name = f'client.referral.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/client/referral/{page_key}',
        'method': method_name,
    }

# Community routes
for page_key in ['forums', 'office-hours', 'sharing', 'regional']:
    route_name = f'community.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/community/{page_key}',
        'method': method_name,
    }

# Status routes
for page_key in ['dashboard', 'incidents', 'maintenance', 'uptime']:
    route_name = f'status.{page_key}'
    method_name = page_key.replace('-', '')
    route_path_map[route_name] = {
        'path': f'/status/{page_key}',
        'method': method_name,
    }

def get_view_title(route_name):
    """Convert route name to a human-readable title."""
    parts = route_name.split('.')
    title = ' '.join(parts)
    # Capitalize each word
    return ' '.join(word.capitalize() for word in title.replace('-', ' ').split())

def create_index_view(module_name, route_name):
    """Create an index page view with module overview."""
    title = get_view_title(route_name)
    module_md = route_name.replace('.', '/')
    
    return f"""@extends('layouts.app')

@section('title', __('{title}'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('{title}') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/{module_md}/index.md -->
                {{ __('Overview and introduction to {module_name}.') }}
            </p>
        </div>
        @include('components.shared.segment-selector')
    </div>
</section>

<!-- PLACEHOLDER: Key features / content sections -->
<section class="py-20 bg-maisara-ivory">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- PLACEHOLDER: Feature cards from content/{module_md}/index.md -->
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Feature') }} 1</h3>
                <p class="text-gray-600">{{ __('Description of key feature.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Feature') }} 2</h3>
                <p class="text-gray-600">{{ __('Description of key feature.') }}</p>
            </div>
            <div class="bg-white rounded-xl shadow-md p-6">
                <h3 class="font-display text-xl font-semibold text-maisara-navy mb-2">{{ __('Feature') }} 3</h3>
                <p class="text-gray-600">{{ __('Description of key feature.') }}</p>
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
            {{ __('Contact us to discuss how we can help with {module_name}.') }}
        </p>
        <a href="{{{{ route('contact.index', ['locale' => app()->getLocale()]) }}}}" class="btn-primary">{{{{ __('Contact Us') }}}}</a>
    </div>
</section>
@endsection
"""

def create_subpage_view(route_name):
    """Create a sub-page view."""
    title = get_view_title(route_name)
    module_md = route_name.replace('.', '/')
    page_key = route_name.split('.')[-1]
    
    return f"""@extends('layouts.app')

@section('title', __('{title}'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('{title}') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/{module_md}.md -->
                {{ __('Description and details for {page_key.replace('-', ' ')}.') }}
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <!-- PLACEHOLDER: content/{module_md}.md -->
        </div>
    </div>
</section>
@endsection
"""

# First, create all view files
created_views = []
for module_key, module_info in modules.items():
    for route_name, view_path in module_info['pages'].items():
        # Check if view is an index page (route name ends with '.index' or view path ends with '/index')
        is_index = view_path.endswith('.index') or route_name.endswith('.index')
        
        # Determine the Blade file path
        view_file = os.path.join(VIEWS_DIR, view_path.replace('.', os.sep) + '.blade.php')
        
        # Get module name for placeholders
        module_name = module_key.replace('-', ' ')
        
        if is_index:
            content = create_index_view(module_name, route_name)
        else:
            content = create_subpage_view(route_name)
        
        # Create directory if needed
        os.makedirs(os.path.dirname(view_file), exist_ok=True)
        
        with open(view_file, 'w', encoding='utf-8') as f:
            f.write(content)
        
        created_views.append(view_file)

print(f"Created {len(created_views)} view files.")

# Update web.php
# Read current web.php
with open(ROUTES_FILE, 'r', encoding='utf-8') as f:
    web_content = f.read()

# Build new route lines grouped by module
new_routes_by_module = {}
for module_key, module_info in modules.items():
    new_routes_by_module[module_key] = []
    for route_name in module_info['pages']:
        info = route_path_map[route_name]
        route_line = f"    Route::get('{info['path']}', [{module_info['controller']}::class, '{info['method']}'])->name('{route_name}');"
        new_routes_by_module[module_key].append(route_line)

# Insert routes after each module's existing index route
# We need to find the index route for each module and insert after it
for module_key, module_info in modules.items():
    controller_name = module_info['controller']
    
    # Find existing index route for this module
    # Pattern: Route::get('/module', [Controller::class, 'index'])->name('module.index');
    pattern = rf"(Route::get\('/{re.escape(module_key)}', \[{re.escape(controller_name)}::class, 'index'\]\)->name\('{re.escape(module_key)}\.index'\);)"
    
    def replacer(match):
        existing_route = match.group(1)
        new_routes = '\n'.join(new_routes_by_module[module_key])
        return existing_route + '\n' + new_routes
    
    new_content, count = re.subn(pattern, replacer, web_content)
    if count > 0:
        web_content = new_content
        print(f"Added routes for {module_key}")
    else:
        print(f"WARNING: Could not find index route for {module_key}")

# Write updated web.php
with open(ROUTES_FILE, 'w', encoding='utf-8') as f:
    f.write(web_content)

print("Updated routes/web.php")

# Update controllers
controllers_dir = os.path.join(BASE_DIR, 'app', 'Http', 'Controllers')

for module_key, module_info in modules.items():
    controller_name = module_info['controller'] + '.php'
    controller_file = os.path.join(controllers_dir, controller_name)
    
    with open(controller_file, 'r', encoding='utf-8') as f:
        controller_content = f.read()
    
    # Build new methods
    new_methods = []
    for route_name, view_path in module_info['pages'].items():
        info = route_path_map[route_name]
        method_name = info['method']
        method = f"""    public function {method_name}()
    {{
        return $this->view('{view_path}');
    }}

"""
        new_methods.append(method)
    
    # Append methods before final closing brace
    controller_content = controller_content.rstrip()
    if controller_content.endswith('}'):
        controller_content = controller_content[:-1].rstrip() + '\n' + ''.join(new_methods) + '}\n'
    
    with open(controller_file, 'w', encoding='utf-8') as f:
        f.write(controller_content)
    
    print(f"Updated {controller_name}")

print("Done!")
