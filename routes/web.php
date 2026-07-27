<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TechnologyController;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\TrustController;
use App\Http\Controllers\InsightsController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TalentController;
use App\Http\Controllers\MethodologyController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\KnowledgeBaseController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\SuccessController;
use App\Http\Controllers\ReferralController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => '{locale}',
    'middleware' => ['locale', 'segment'],
    'where' => ['locale' => 'en|ar'],
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // About
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');
    Route::get('/about/founder', [AboutController::class, 'founder'])->name('about.founder');
    Route::get('/about/team', [AboutController::class, 'team'])->name('about.team');
    Route::get('/about/future', [AboutController::class, 'future'])->name('about.future');

    // Services
    Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
    Route::get('/services/advisory', [ServicesController::class, 'advisory'])->name('services.advisory');
    Route::get('/services/design', [ServicesController::class, 'design'])->name('services.design');
    Route::get('/services/delivery', [ServicesController::class, 'delivery'])->name('services.delivery');
    Route::get('/services/managed-ops', [ServicesController::class, 'managedOps'])->name('services.managed-ops');
    Route::get('/services/localization', [ServicesController::class, 'localization'])->name('services.localization');
    Route::get('/services/industry-solutions', [ServicesController::class, 'industrySolutions'])->name('services.industry-solutions');
    Route::get('/services/enablement', [ServicesController::class, 'enablement'])->name('services.enablement');
    Route::get('/services/sovereignty', [ServicesController::class, 'sovereignty'])->name('services.sovereignty');

    // Technology
    Route::get('/technology', [TechnologyController::class, 'index'])->name('technology.index');
    Route::get('/technology/architecture-philosophy', [TechnologyController::class, 'architecturephilosophy'])->name('technology.architecture-philosophy');
    Route::get('/technology/sovereign-infrastructure', [TechnologyController::class, 'sovereigninfrastructure'])->name('technology.sovereign-infrastructure');
    Route::get('/technology/isolation', [TechnologyController::class, 'isolation'])->name('technology.isolation');
    Route::get('/technology/arabic-first', [TechnologyController::class, 'arabicfirst'])->name('technology.arabic-first');
    Route::get('/technology/ai-delivery', [TechnologyController::class, 'aidelivery'])->name('technology.ai-delivery');
    Route::get('/technology/security', [TechnologyController::class, 'security'])->name('technology.security');
    Route::get('/technology/scalability', [TechnologyController::class, 'scalability'])->name('technology.scalability');
    Route::get('/technology/performance', [TechnologyController::class, 'performance'])->name('technology.performance');
    Route::get('/technology/open-foundations', [TechnologyController::class, 'openfoundations'])->name('technology.open-foundations');
    Route::get('/technology/ecosystem', [TechnologyController::class, 'ecosystem'])->name('technology.ecosystem');

    // Deployment
    Route::get('/deployment', [DeploymentController::class, 'index'])->name('deployment.index');
    Route::get('/deployment/comparison', [DeploymentController::class, 'comparison'])->name('deployment.comparison');
    Route::get('/deployment/suitability', [DeploymentController::class, 'suitability'])->name('deployment.suitability');
    Route::get('/deployment/tco', [DeploymentController::class, 'tco'])->name('deployment.tco');
    Route::get('/deployment/autonomy', [DeploymentController::class, 'autonomy'])->name('deployment.autonomy');
    Route::get('/deployment/timeline', [DeploymentController::class, 'timeline'])->name('deployment.timeline');
    Route::get('/deployment/migration', [DeploymentController::class, 'migration'])->name('deployment.migration');
    Route::get('/deployment/feature-parity', [DeploymentController::class, 'featureparity'])->name('deployment.feature-parity');
    Route::get('/deployment/reference-cases', [DeploymentController::class, 'referencecases'])->name('deployment.reference-cases');
    Route::get('/deployment/advisory-booking', [DeploymentController::class, 'advisorybooking'])->name('deployment.advisory-booking');

    // Portfolio
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
    Route::get('/portfolio/case-studies', [PortfolioController::class, 'casestudies'])->name('portfolio.case-studies');
    Route::get('/portfolio/advisory-journals', [PortfolioController::class, 'advisoryjournals'])->name('portfolio.advisory-journals');
    Route::get('/portfolio/implementation-evidence', [PortfolioController::class, 'implementationevidence'])->name('portfolio.implementation-evidence');
    Route::get('/portfolio/outcomes', [PortfolioController::class, 'outcomes'])->name('portfolio.outcomes');
    Route::get('/portfolio/perspective', [PortfolioController::class, 'perspective'])->name('portfolio.perspective');
    Route::get('/portfolio/technology-story', [PortfolioController::class, 'technologystory'])->name('portfolio.technology-story');
    Route::get('/portfolio/client-narratives', [PortfolioController::class, 'clientnarratives'])->name('portfolio.client-narratives');
    Route::get('/portfolio/authority', [PortfolioController::class, 'authority'])->name('portfolio.authority');
    Route::get('/portfolio/evolution', [PortfolioController::class, 'evolution'])->name('portfolio.evolution');
    Route::get('/portfolio/confidentiality', [PortfolioController::class, 'confidentiality'])->name('portfolio.confidentiality');

    // Trust
    Route::get('/trust', [TrustController::class, 'index'])->name('trust.index');
    Route::get('/trust/data-sovereignty', [TrustController::class, 'datasovereignty'])->name('trust.data-sovereignty');
    Route::get('/trust/security-posture', [TrustController::class, 'securityposture'])->name('trust.security-posture');
    Route::get('/trust/backup-recovery', [TrustController::class, 'backuprecovery'])->name('trust.backup-recovery');
    Route::get('/trust/privacy-policy', [TrustController::class, 'privacypolicy'])->name('trust.privacy-policy');
    Route::get('/trust/regional-compliance', [TrustController::class, 'regionalcompliance'])->name('trust.regional-compliance');

    // Insights
    Route::get('/insights', [InsightsController::class, 'index'])->name('insights.index');
    Route::get('/insights/thought-leadership', [InsightsController::class, 'thoughtleadership'])->name('insights.thought-leadership');
    Route::get('/insights/perspectives', [InsightsController::class, 'perspectives'])->name('insights.perspectives');
    Route::get('/insights/intelligence', [InsightsController::class, 'intelligence'])->name('insights.intelligence');
    Route::get('/insights/success-stories', [InsightsController::class, 'successstories'])->name('insights.success-stories');
    Route::get('/insights/resources', [InsightsController::class, 'resources'])->name('insights.resources');
    Route::get('/insights/newsletter', [InsightsController::class, 'newsletter'])->name('insights.newsletter');
    Route::post('/insights/newsletter', [InsightsController::class, 'subscribe'])->name('insights.newsletter.subscribe');

    // Partners
    Route::get('/partners', [PartnersController::class, 'index'])->name('partners.index');
    Route::get('/partners/technology-alliances', [PartnersController::class, 'technologyalliances'])->name('partners.technology-alliances');
    Route::get('/partners/innovation-hubs', [PartnersController::class, 'innovationhubs'])->name('partners.innovation-hubs');
    Route::get('/partners/coworking-networks', [PartnersController::class, 'coworkingnetworks'])->name('partners.coworking-networks');
    Route::get('/partners/professional-services', [PartnersController::class, 'professionalservices'])->name('partners.professional-services');
    Route::get('/partners/referral-programme', [PartnersController::class, 'referralprogramme'])->name('partners.referral-programme');
    Route::get('/partners/joint-models', [PartnersController::class, 'jointmodels'])->name('partners.joint-models');
    Route::get('/partners/success-co-narratives', [PartnersController::class, 'successconarratives'])->name('partners.success-co-narratives');
    Route::get('/partners/apply', [PartnersController::class, 'apply'])->name('partners.apply');
    Route::get('/partners/resources', [PartnersController::class, 'resources'])->name('partners.resources');
    Route::get('/partners/local-presence', [PartnersController::class, 'localpresence'])->name('partners.local-presence');

    // Events
    Route::get('/events', [EventsController::class, 'index'])->name('events.index');
    Route::get('/events/calendar', [EventsController::class, 'calendar'])->name('events.calendar');
    Route::get('/events/webinars', [EventsController::class, 'webinars'])->name('events.webinars');
    Route::get('/events/workshops', [EventsController::class, 'workshops'])->name('events.workshops');
    Route::get('/events/roundtables', [EventsController::class, 'roundtables'])->name('events.roundtables');
    Route::get('/events/speaking-requests', [EventsController::class, 'speakingrequests'])->name('events.speaking-requests');
    Route::get('/events/library', [EventsController::class, 'library'])->name('events.library');

    // Talent
    Route::get('/talent', [TalentController::class, 'index'])->name('talent.index');
    Route::get('/talent/open-positions', [TalentController::class, 'openpositions'])->name('talent.open-positions');
    Route::get('/talent/career-pathways', [TalentController::class, 'careerpathways'])->name('talent.career-pathways');
    Route::get('/talent/apply', [TalentController::class, 'apply'])->name('talent.apply');
    Route::get('/talent/values-in-practice', [TalentController::class, 'valuesinpractice'])->name('talent.values-in-practice');
    Route::get('/talent/work-model', [TalentController::class, 'workmodel'])->name('talent.work-model');
    Route::get('/talent/specialist-network', [TalentController::class, 'specialistnetwork'])->name('talent.specialist-network');
    Route::get('/talent/internships', [TalentController::class, 'internships'])->name('talent.internships');
    Route::get('/talent/benefits', [TalentController::class, 'benefits'])->name('talent.benefits');
    Route::get('/talent/diversity', [TalentController::class, 'diversity'])->name('talent.diversity');

    // Methodology
    Route::get('/methodology', [MethodologyController::class, 'index'])->name('methodology.index');
    Route::get('/methodology/discovery', [MethodologyController::class, 'discovery'])->name('methodology.discovery');
    Route::get('/methodology/scoping', [MethodologyController::class, 'scoping'])->name('methodology.scoping');
    Route::get('/methodology/co-design', [MethodologyController::class, 'codesign'])->name('methodology.co-design');
    Route::get('/methodology/governance', [MethodologyController::class, 'governance'])->name('methodology.governance');
    Route::get('/methodology/qa', [MethodologyController::class, 'qa'])->name('methodology.qa');
    Route::get('/methodology/arabic-quality', [MethodologyController::class, 'arabicquality'])->name('methodology.arabic-quality');
    Route::get('/methodology/knowledge-transfer', [MethodologyController::class, 'knowledgetransfer'])->name('methodology.knowledge-transfer');
    Route::get('/methodology/post-launch', [MethodologyController::class, 'postlaunch'])->name('methodology.post-launch');
    Route::get('/methodology/escalation', [MethodologyController::class, 'escalation'])->name('methodology.escalation');
    Route::get('/methodology/technology-integration', [MethodologyController::class, 'technologyintegration'])->name('methodology.technology-integration');

    // Legal
    Route::get('/legal', [LegalController::class, 'index'])->name('legal.index');
    Route::get('/legal/agreement-templates', [LegalController::class, 'agreementtemplates'])->name('legal.agreement-templates');
    Route::get('/legal/service-terms', [LegalController::class, 'serviceterms'])->name('legal.service-terms');
    Route::get('/legal/privacy-policy', [LegalController::class, 'privacypolicy'])->name('legal.privacy-policy');
    Route::get('/legal/subscription-terms', [LegalController::class, 'subscriptionterms'])->name('legal.subscription-terms');

    // Press
    Route::get('/press', [PressController::class, 'index'])->name('press.index');
    Route::get('/press/press-kit', [PressController::class, 'presskit'])->name('press.press-kit');
    Route::get('/press/news', [PressController::class, 'news'])->name('press.news');
    Route::get('/press/commentary', [PressController::class, 'commentary'])->name('press.commentary');
    Route::get('/press/inquiries', [PressController::class, 'inquiries'])->name('press.inquiries');

    // Investor
    Route::get('/investor', [InvestorController::class, 'index'])->name('investor.index');
    Route::get('/investor/thesis', [InvestorController::class, 'thesis'])->name('investor.thesis');
    Route::get('/investor/economics', [InvestorController::class, 'economics'])->name('investor.economics');
    Route::get('/investor/trajectory', [InvestorController::class, 'trajectory'])->name('investor.trajectory');
    Route::get('/investor/market', [InvestorController::class, 'market'])->name('investor.market');

    // Assessment
    Route::get('/assessment', [AssessmentController::class, 'index'])->name('assessment.index');
    Route::get('/assessment/maturity', [AssessmentController::class, 'maturity'])->name('assessment.maturity');
    Route::get('/assessment/deployment-suitability', [AssessmentController::class, 'deploymentsuitability'])->name('assessment.deployment-suitability');
    Route::get('/assessment/arabic-readiness', [AssessmentController::class, 'arabicreadiness'])->name('assessment.arabic-readiness');
    Route::get('/assessment/advisory-readiness', [AssessmentController::class, 'advisoryreadiness'])->name('assessment.advisory-readiness');
    Route::get('/assessment/segment-identifier', [AssessmentController::class, 'segmentidentifier'])->name('assessment.segment-identifier');
    Route::post('/assessment/submit', [AssessmentController::class, 'submit'])->name('assessment.submit');

    // Knowledge Base
    Route::get('/knowledge-base', [KnowledgeBaseController::class, 'index'])->name('knowledge-base.index');
    Route::get('/knowledge-base/faq-segments', [KnowledgeBaseController::class, 'faqsegments'])->name('knowledge-base.faq-segments');
    Route::get('/knowledge-base/readiness', [KnowledgeBaseController::class, 'readiness'])->name('knowledge-base.readiness');
    Route::get('/knowledge-base/models-comparison', [KnowledgeBaseController::class, 'modelscomparison'])->name('knowledge-base.models-comparison');
    Route::get('/knowledge-base/architecture', [KnowledgeBaseController::class, 'architecture'])->name('knowledge-base.architecture');
    Route::get('/knowledge-base/discovery-prep', [KnowledgeBaseController::class, 'discoveryprep'])->name('knowledge-base.discovery-prep');

    // Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
    Route::get('/contact/booking', [ContactController::class, 'booking'])->name('contact.booking');
    Route::get('/contact/regional-routing', [ContactController::class, 'regionalRouting'])->name('contact.regional-routing');
    Route::get('/contact/channels', [ContactController::class, 'channels'])->name('contact.channels');
    Route::get('/contact/live-chat', [ContactController::class, 'liveChat'])->name('contact.live-chat');

    // Client Portal
    Route::prefix('client')->name('client.')->group(function () {
        Route::get('/onboarding', [OnboardingController::class, 'index'])->name('onboarding.index');
    Route::get('/client/onboarding/welcome', [OnboardingController::class, 'welcome'])->name('client.onboarding.welcome');
    Route::get('/client/onboarding/platform-access', [OnboardingController::class, 'platformaccess'])->name('client.onboarding.platform-access');
    Route::get('/client/onboarding/kickoff', [OnboardingController::class, 'kickoff'])->name('client.onboarding.kickoff');
    Route::get('/client/onboarding/timeline', [OnboardingController::class, 'timeline'])->name('client.onboarding.timeline');
    Route::get('/client/onboarding/training', [OnboardingController::class, 'training'])->name('client.onboarding.training');
        Route::get('/billing', [BillingController::class, 'index'])->name('billing.index');
    Route::get('/client/billing/plan-overview', [BillingController::class, 'planoverview'])->name('client.billing.plan-overview');
    Route::get('/client/billing/invoices', [BillingController::class, 'invoices'])->name('client.billing.invoices');
    Route::get('/client/billing/payment-methods', [BillingController::class, 'paymentmethods'])->name('client.billing.payment-methods');
    Route::get('/client/billing/plan-modification', [BillingController::class, 'planmodification'])->name('client.billing.plan-modification');
        Route::get('/success', [SuccessController::class, 'index'])->name('success.index');
    Route::get('/client/success/dashboard', [SuccessController::class, 'dashboard'])->name('client.success.dashboard');
    Route::get('/client/success/advisory-booking', [SuccessController::class, 'advisorybooking'])->name('client.success.advisory-booking');
    Route::get('/client/success/requests', [SuccessController::class, 'requests'])->name('client.success.requests');
    Route::get('/client/success/reports', [SuccessController::class, 'reports'])->name('client.success.reports');
        Route::get('/referral', [ReferralController::class, 'index'])->name('referral.index');
    Route::get('/client/referral/program-overview', [ReferralController::class, 'programoverview'])->name('client.referral.program-overview');
    Route::get('/client/referral/submit', [ReferralController::class, 'submit'])->name('client.referral.submit');
    Route::get('/client/referral/track', [ReferralController::class, 'track'])->name('client.referral.track');
    Route::get('/client/referral/recognition', [ReferralController::class, 'recognition'])->name('client.referral.recognition');
    });

    // Community
    Route::get('/community', [CommunityController::class, 'index'])->name('community.index');
    Route::get('/community/forums', [CommunityController::class, 'forums'])->name('community.forums');
    Route::get('/community/office-hours', [CommunityController::class, 'officehours'])->name('community.office-hours');
    Route::get('/community/sharing', [CommunityController::class, 'sharing'])->name('community.sharing');
    Route::get('/community/regional', [CommunityController::class, 'regional'])->name('community.regional');

    // Status
    Route::get('/status', [StatusController::class, 'index'])->name('status.index');
    Route::get('/status/dashboard', [StatusController::class, 'dashboard'])->name('status.dashboard');
    Route::get('/status/incidents', [StatusController::class, 'incidents'])->name('status.incidents');
    Route::get('/status/maintenance', [StatusController::class, 'maintenance'])->name('status.maintenance');
    Route::get('/status/uptime', [StatusController::class, 'uptime'])->name('status.uptime');
});

// Default locale redirect
Route::get('/', function () {
    return redirect(app()->getLocale() ?: 'en');
});

require base_path('routes/auth.php');
require base_path('routes/console.php');
