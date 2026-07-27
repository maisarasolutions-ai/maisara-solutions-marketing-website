<div class="flex items-center space-x-2">
    <button onclick="toggleLanguage('en')" @if(app()->getLocale() === 'en') class="text-maisara-ember font-semibold" @else class="text-white/70 hover:text-white" @endif>
        EN
    </button>
    <span class="text-white/30">|</span>
    <button onclick="toggleLanguage('ar')" @if(app()->getLocale() === 'ar') class="text-maisara-ember font-semibold" @else class="text-white/70 hover:text-white" @endif>
        AR
    </button>
</div>
