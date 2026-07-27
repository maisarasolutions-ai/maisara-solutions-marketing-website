import os
import re

BASE_DIR = r'C:\Users\maisa\Desktop\final\maisara_solutions_marketing_website\marketing_website\development\codebase'
VIEWS_DIR = os.path.join(BASE_DIR, 'resources', 'views')

modules = {
    'methodology': {
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
    },
    'technology': {
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
    },
    'deployment': {
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
    },
    'portfolio': {
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
    },
    'insights': {
        'controller': 'InsightsController',
        'pages': {
            'insights.thought-leadership': 'insights.thought-leadership',
            'insights.perspectives': 'insights.perspectives',
            'insights.intelligence': 'insights.intelligence',
            'insights.success-stories': 'insights.success-stories',
            'insights.resources': 'insights.resources',
            'insights.newsletter': 'insights.newsletter',
        }
    },
    'partners': {
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
    },
    'events': {
        'controller': 'EventsController',
        'pages': {
            'events.calendar': 'events.calendar',
            'events.webinars': 'events.webinars',
            'events.workshops': 'events.workshops',
            'events.roundtables': 'events.roundtables',
            'events.speaking-requests': 'events.speaking-requests',
            'events.library': 'events.library',
        }
    },
    'talent': {
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
    },
    'knowledge-base': {
        'controller': 'KnowledgeBaseController',
        'pages': {
            'knowledge-base.faq-segments': 'knowledge-base.faq-segments',
            'knowledge-base.readiness': 'knowledge-base.readiness',
            'knowledge-base.models-comparison': 'knowledge-base.models-comparison',
            'knowledge-base.architecture': 'knowledge-base.architecture',
            'knowledge-base.discovery-prep': 'knowledge-base.discovery-prep',
        }
    },
    'trust': {
        'controller': 'TrustController',
        'pages': {
            'trust.data-sovereignty': 'trust.data-sovereignty',
            'trust.security-posture': 'trust.security-posture',
            'trust.backup-recovery': 'trust.backup-recovery',
            'trust.privacy-policy': 'trust.privacy-policy',
            'trust.regional-compliance': 'trust.regional-compliance',
        }
    },
    'legal': {
        'controller': 'LegalController',
        'pages': {
            'legal.agreement-templates': 'legal.agreement-templates',
            'legal.service-terms': 'legal.service-terms',
            'legal.privacy-policy': 'legal.privacy-policy',
            'legal.subscription-terms': 'legal.subscription-terms',
        }
    },
    'press': {
        'controller': 'PressController',
        'pages': {
            'press.press-kit': 'press.press-kit',
            'press.news': 'press.news',
            'press.commentary': 'press.commentary',
            'press.inquiries': 'press.inquiries',
        }
    },
    'investor': {
        'controller': 'InvestorController',
        'pages': {
            'investor.thesis': 'investor.thesis',
            'investor.economics': 'investor.economics',
            'investor.trajectory': 'investor.trajectory',
            'investor.market': 'investor.market',
        }
    },
    'assessment': {
        'controller': 'AssessmentController',
        'pages': {
            'assessment.maturity': 'assessment.maturity',
            'assessment.deployment-suitability': 'assessment.deployment-suitability',
            'assessment.arabic-readiness': 'assessment.arabic-readiness',
            'assessment.advisory-readiness': 'assessment.advisory-readiness',
            'assessment.segment-identifier': 'assessment.segment-identifier',
        }
    },
    'onboarding': {
        'controller': 'OnboardingController',
        'pages': {
            'client.onboarding.welcome': 'client.onboarding.welcome',
            'client.onboarding.platform-access': 'client.onboarding.platform-access',
            'client.onboarding.kickoff': 'client.onboarding.kickoff',
            'client.onboarding.timeline': 'client.onboarding.timeline',
            'client.onboarding.training': 'client.onboarding.training',
        }
    },
    'billing': {
        'controller': 'BillingController',
        'pages': {
            'client.billing.plan-overview': 'client.billing.plan-overview',
            'client.billing.invoices': 'client.billing.invoices',
            'client.billing.payment-methods': 'client.billing.payment-methods',
            'client.billing.plan-modification': 'client.billing.plan-modification',
        }
    },
    'success': {
        'controller': 'SuccessController',
        'pages': {
            'client.success.dashboard': 'client.success.dashboard',
            'client.success.advisory-booking': 'client.success.advisory-booking',
            'client.success.requests': 'client.success.requests',
            'client.success.reports': 'client.success.reports',
        }
    },
    'referral': {
        'controller': 'ReferralController',
        'pages': {
            'client.referral.program-overview': 'client.referral.program-overview',
            'client.referral.submit': 'client.referral.submit',
            'client.referral.track': 'client.referral.track',
            'client.referral.recognition': 'client.referral.recognition',
        }
    },
    'community': {
        'controller': 'CommunityController',
        'pages': {
            'community.forums': 'community.forums',
            'community.office-hours': 'community.office-hours',
            'community.sharing': 'community.sharing',
            'community.regional': 'community.regional',
        }
    },
    'status': {
        'controller': 'StatusController',
        'pages': {
            'status.dashboard': 'status.dashboard',
            'status.incidents': 'status.incidents',
            'status.maintenance': 'status.maintenance',
            'status.uptime': 'status.uptime',
        }
    }
}

def get_view_title(route_name):
    parts = route_name.split('.')
    title = ' '.join(parts)
    return ' '.join(word.capitalize() for word in title.replace('-', ' ').split())

def create_index_view(module_name, route_name):
    title = get_view_title(route_name)
    module_md = route_name.replace('.', '/')
    module_path = route_name.split('.')[0]
    
    return """@extends('layouts.app')

@section('title', __('%s'))

@section('content')
<!-- PLACEHOLDER: Hero section -->
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('%s') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/%s/index.md -->
                {{ ('%s overview and introduction.') }}
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
            {{ ('Contact us to discuss how we can help with %s.') }}
        </p>
        <a href="{{ route('contact.index', ['locale' => app()->getLocale()]) }}" class="btn-primary">{{ __('Contact Us') }}</a>
    </div>
</section>
@endsection
""" % (title, title, module_md, module_name.capitalize(), module_md, module_name)

def create_subpage_view(route_name):
    title = get_view_title(route_name)
    module_md = route_name.replace('.', '/')
    page_key = route_name.split('.')[-1]
    
    return """@extends('layouts.app')

@section('title', __('%s'))

@section('content')
<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="font-display text-4xl md:text-5xl font-bold text-maisara-navy mb-6">{{ __('%s') }}</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                <!-- PLACEHOLDER: content/%s.md -->
                {{ ('Description and details for %s.') }}
            </p>
        </div>
        <div class="prose max-w-3xl mx-auto">
            <!-- PLACEHOLDER: content/%s.md -->
        </div>
    </div>
</section>
@endsection
""" % (title, title, module_md, page_key.replace('-', ' '), module_md)

# Update all existing index pages first
index_modules = ['methodology', 'technology', 'deployment', 'portfolio', 'insights', 
                'partners', 'events', 'talent', 'knowledge-base', 'trust', 'legal', 
                'press', 'investor', 'assessment', 'onboarding', 'billing', 'success', 
                'referral', 'community', 'status']

# Map route names to view paths for index pages
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
    'client.onboarding': 'client.onboarding.index',
    'client.billing': 'client.billing.index',
    'client.success': 'client.success.index',
    'client.referral': 'client.referral.index',
    'community': 'community.index',
    'status': 'status.index',
}

for module_path, route_name in index_route_map.items():
    view_file = os.path.join(VIEWS_DIR, module_path.replace('.', os.sep) + '.blade.php')
    if os.path.exists(view_file):
        module_name = module_path.split('.')[-1]
        pos = module_path.find('.')
        if pos != -1:
            module_name = module_path[pos+1:]
        content = create_index_view(module_name, route_name)
        with open(view_file, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Updated {view_file}")
    else:
        print(f"SKIP: {view_file} does not exist")

# Fix all generated sub-pages
for module_key, module_info in modules.items():
    for route_name in module_info['pages']:
        view_path = module_info['pages'][route_name]
        view_file = os.path.join(VIEWS_DIR, view_path.replace('.', os.sep) + '.blade.php')
        
        if not os.path.exists(view_file):
            print(f"SKIP: {view_file} does not exist")
            continue
        
        # Create fresh content
        content = create_subpage_view(route_name)
        
        with open(view_file, 'w', encoding='utf-8') as f:
            f.write(content)
        print(f"Fixed {view_file}")

print("Done updating views!")
