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

    // Deployment
    Route::get('/deployment', [DeploymentController::class, 'index'])->name('deployment.index');

    // Portfolio
    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

    // Trust
    Route::get('/trust', [TrustController::class, 'index'])->name('trust.index');

    // Insights
    Route::get('/insights', [InsightsController::class, 'index'])->name('insights.index');

    // Partners
    Route::get('/partners', [PartnersController::class, 'index'])->name('partners.index');

    // Events
    Route::get('/events', [EventsController::class, 'index'])->name('events.index');

    // Talent
    Route::get('/talent', [TalentController::class, 'index'])->name('talent.index');

    // Methodology
    Route::get('/methodology', [MethodologyController::class, 'index'])->name('methodology.index');

    // Legal
    Route::get('/legal', [LegalController::class, 'index'])->name('legal.index');

    // Press
    Route::get('/press', [PressController::class, 'index'])->name('press.index');

    // Investor
    Route::get('/investor', [InvestorController::class, 'index'])->name('investor.index');

    // Assessment
    Route::get('/assessment', [AssessmentController::class, 'index'])->name('assessment.index');

    // Knowledge Base
    Route::get('/knowledge-base', [KnowledgeBaseController::class, 'index'])->name('knowledge-base.index');

    // Contact
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/booking', [ContactController::class, 'booking'])->name('contact.booking');
    Route::get('/contact/regional-routing', [ContactController::class, 'regionalRouting'])->name('contact.regional-routing');
    Route::get('/contact/channels', [ContactController::class, 'channels'])->name('contact.channels');
    Route::get('/contact/live-chat', [ContactController::class, 'liveChat'])->name('contact.live-chat');

    // Client Portal
    Route::prefix('client')->name('client.')->group(function () {
        Route::get('/onboarding', [OnboardingController::class, 'index'])->name('onboarding.index');
        Route::get('/billing', [BillingController::class, 'index'])->name('billing.index');
        Route::get('/success', [SuccessController::class, 'index'])->name('success.index');
        Route::get('/referral', [ReferralController::class, 'index'])->name('referral.index');
    });

    // Community
    Route::get('/community', [CommunityController::class, 'index'])->name('community.index');

    // Status
    Route::get('/status', [StatusController::class, 'index'])->name('status.index');
});

// Default locale redirect
Route::get('/', function () {
    return redirect(app()->getLocale() ?: 'en');
});

require base_path('routes/auth.php');
require base_path('routes/console.php');
