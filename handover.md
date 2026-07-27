# Maisara Solutions Marketing Website — Developer Handover

## 1. Project Overview

This is the official marketing and client-portal website for **Maisara Solutions**, a digital transformation consultancy operating from **Cairo, Egypt** and **Riyadh, Saudi Arabia**.

The site serves multiple audiences:
- Independent professionals (sovereign professionals)
- Emerging ventures / startups
- Established service organizations (clinics, academies, agencies)
- Investors and partners
- Existing clients (client portal)

### Live URL
- Primary: `https://www.maisarasolutions.com`
- Tunnel: Cloudflare Tunnel routes traffic to the VPS; no host ports are exposed publicly.

### Key Characteristics
- Fully bilingual: **English** and **Arabic** (`/en/*`, `/ar/*`)
- RTL-aware layout for Arabic pages
- Content-driven architecture with markdown files
- Modern 2024+ design system with Maisara brand colors
- Dockerized production stack with CI/CD via GitHub Actions

---

## 2. Tech Stack

| Layer | Technology |
|-------|-----------|
| Backend | Laravel 11 (PHP 8.3) |
| Frontend | Blade templates, Tailwind CSS 3, Vite |
| Database | PostgreSQL 16 |
| Cache / Sessions | Redis 7 |
| Web Server | Nginx (in Docker) |
| App Server | PHP-FPM 8.3 (in Docker) |
| Containerization | Docker + Docker Compose |
| CI/CD | GitHub Actions → GHCR (GitHub Container Registry) |
| Deployment | Watchtower + Cloudflare Tunnel |
| Frontend Interactivity | Alpine.js (CDN) |
| Fonts | Google Fonts: Playfair Display, Inter, Noto Naskh Arabic, Cairo |

---

## 3. Local Development Setup

### Prerequisites
- Docker and Docker Compose
- Node.js 18+
- PHP 8.3 (optional, for local artisan commands)

### Start the Stack
```bash
docker compose --env-file maisara.env up -d
```

### Important Notes
- All `docker compose` commands **must** include `--env-file maisara.env`
- The `docker-compose.override.yml` mounts the local directory into the app container and enables `APP_DEBUG=true`
- The app container uses `php-fpm-alpine` and does **not** run a web server directly
- Nginx serves static assets and proxies PHP requests to the app container

### Useful Commands
```bash
# Check running services
docker compose --env-file maisara.env ps

# Run migrations
docker compose --env-file maisara.env exec app php artisan migrate --force

# View logs
docker compose --env-file maisara.env logs -f

# Access app shell
docker compose --env-file maisara.env exec app sh

# Build assets locally (if needed)
npm install
npm run build
```

### Environment File
Create `maisara.env` at the project root. It is **gitignored** and must contain:
- `APP_KEY`
- `DB_PASSWORD`
- `REDIS_PASSWORD`
- Any other secrets your deployment requires

---

## 4. Codebase Structure

```
├── app/
│   ├── Http/
│   │   ├── Controllers/          # All page controllers
│   │   │   ├── Controller.php           # Base controller with ContentService integration
│   │   │   ├── HomeController.php
│   │   │   ├── AboutController.php
│   │   │   ├── ServicesController.php
│   │   │   ├── ContactController.php
│   │   │   ├── TechnologyController.php
│   │   │   ├── DeploymentController.php
│   │   │   ├── PortfolioController.php
│   │   │   ├── TrustController.php
│   │   │   ├── InsightsController.php
│   │   │   ├── PartnersController.php
│   │   │   ├── EventsController.php
│   │   │   ├── TalentController.php
│   │   │   ├── MethodologyController.php
│   │   │   ├── LegalController.php
│   │   │   ├── PressController.php
│   │   │   ├── InvestorController.php
│   │   │   ├── AssessmentController.php
│   │   │   ├── KnowledgeBaseController.php
│   │   │   ├── OnboardingController.php
│   │   │   ├── BillingController.php
│   │   │   ├── SuccessController.php
│   │   │   ├── ReferralController.php
│   │   │   ├── CommunityController.php
│   │   │   ├── StatusController.php
│   │   │   └── HealthController.php
│   │   └── Middleware/
│   │       ├── DetectLocale.php      # Sets locale from route param or session
│   │       └── DetectSegment.php      # Reads segment query param / cookie
│   └── Services/
│       └── ContentService.php         # Loads markdown content per module/locale
├── bootstrap/
│   └── app.php                          # Laravel 11 bootstrap + middleware aliases
├── config/
│   └── app.php                          # App config: available_locales = ['en', 'ar']
├── database/
│   └── migrations/                      # Database migrations
├── lang/
│   ├── en/
│   │   ├── auth.php                     # Default Laravel auth translations (EN)
│   │   ├── messages.php                 # Custom UI strings (EN) — 352 entries
│   │   ├── pagination.php
│   │   ├── passwords.php
│   │   └── validation.php
│   └── ar/
│       ├── auth.php                     # Default Laravel auth translations (AR)
│       ├── messages.php                 # Custom UI strings (AR) — 352 entries
│       ├── pagination.php
│       ├── passwords.php
│       └── validation.php
├── public/
│   └── index.php                        # Laravel entry point
├── resources/
│   ├── content/                         # Markdown content per module
│   │   ├── about/
│   │   │   └── index.md                 # English content (default)
│   │   │   └── ar.md                    # Arabic content
│   │   ├── services/
│   │   ├── technology/
│   │   ├── deployment/
│   │   ├── portfolio/
│   │   ├── trust/
│   │   ├── insights/
│   │   ├── partners/
│   │   ├── events/
│   │   ├── talent/
│   │   ├── methodology/
│   │   ├── legal/
│   │   ├── press/
│   │   ├── investor/
│   │   ├── assessment/
│   │   ├── knowledge-base/
│   │   ├── contact/
│   │   ├── home/
│   │   ├── client/
│   │   │   ├── onboarding/
│   │   │   ├── billing/
│   │   │   ├── success/
│   │   │   └── referral/
│   │   └── ... (one folder per page/module)
│   ├── data/                            # Structured page data (3 items per module)
│   │   ├── en/                          # English page data
│   │   │   ├── home/index.php
│   │   │   ├── services/index.php
│   │   │   └── ... (one folder per route module)
│   │   └── ar/                          # Arabic page data
│   │       ├── home/index.php
│   │       ├── services/index.php
│   │       └── ... (one folder per route module)
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php           # Master layout with RTL dir attribute
│   │   ├── components/
│   │   │   └── shared/
│   │   │       ├── header.blade.php    # Sticky nav with Alpine dropdowns
│   │   │       ├── footer.blade.php    # 4-column footer
│   │   │       ├── language-toggle.blade.php
│   │   │       ├── segment-selector.blade.php
│   │   │       └── ui/                 # Reusable UI components
│   │   ├── home/
│   │   │   └── index.blade.php
│   │   ├── about/
│   │   │   └── index.blade.php
│   │   └── ... (one folder per route module)
│   ├── css/
│   │   └── app.css                     # Tailwind imports + custom design system
│   └── js/
│       └── app.js                      # Global utilities (language toggle, mobile menu)
├── routes/
│   ├── web.php                          # All routes with locale prefix
│   ├── auth.php                         # Laravel auth routes
│   └── console.php                      # Artisan commands
├── storage/                              # Runtime storage (gitignored)
├── tests/
│   └── Feature/SmokeTest.php            # Smoke tests for all major routes
├── .github/
│   └── workflows/
│       ├── deploy-app.yml               # Builds & pushes PHP-FPM image to GHCR
│       └── deploy-nginx.yml             # Builds & pushes Nginx image to GHCR
├── docker-compose.yml                   # Production stack definition
├── docker-compose.override.yml          # Local dev overrides (mounts, debug)
├── Dockerfile                           # PHP-FPM image build
├── nginx/                               # Nginx config for production image
├── deploy.sh                            # VPS deployment script
├── tailwind.config.js                   # Tailwind config with Maisara colors
├── vite.config.js                       # Vite config
├── postcss.config.js
├── package.json
├── composer.json
└── .env.example
```

---

## 5. Architecture & Key Patterns

### 5.1 Locale / Internationalization (i18n)

- All routes are prefixed with `{locale}` constrained to `en|ar`
- Middleware: `DetectLocale` sets the app locale from the route parameter or session
- Default locale: `en`
- Available locales: `['en', 'ar']` (defined in `config/app.php`)
- Blade strings use `__('key')` for translation
- Translation files live in `lang/en/` and `lang/ar/`
- Custom UI strings are in `lang/*/messages.php` (352 keys)

### 5.2 Content System

**Markdown Content** (`resources/content/`)
- Each page/module has its own folder
- Default content: `index.md` (English)
- Arabic content: `ar.md` in the same folder
- `ContentService` loads content based on module path and locale
- Markdown is parsed to HTML with basic formatting support (headings, lists, bold, italic, links)
- RTL classes (`ltr` / `rtl`) are automatically applied to rendered HTML elements

**Page Data** (`resources/data/`)
- Structured PHP arrays for page-specific data (3 items per module)
- Each module has `resources/data/en/{module}/index.php` and `resources/data/ar/{module}/index.php`
- Returns array with `title` and `items` keys
- Loaded automatically by the base `Controller` and injected as `$pageData` into views

### 5.3 Segment System

- Cookie/query-based segmentation: `sovereign`, `emerging`, `established`
- `DetectSegment` middleware reads `?segment=` query param or `segment` cookie
- Default segment: `sovereign`
- Segment selector component included on home, technology, contact, and community pages

### 5.4 Base Controller Pattern

All controllers extend `App\Http\Controllers\Controller`, which provides:
- `sharedViewData()` — injects `$availableLocales` and `$currentLocale`
- `view($view, $data)` — auto-loads content and page data based on view path
- `guessModuleFromView($view)` — derives content module path from Blade dot-path
  - Example: `client.billing.index` → `client/billing`
  - Example: `about.index` → `about`

### 5.5 View Conventions

- All translatable strings must use `__('key')` — hardcoded strings are not allowed
- Use `route('name', ['locale' => app()->getLocale()])` for all internal links
- Use `.section-title`, `.section-subtitle`, `.card`, `.card-ember`, `.btn-primary`, `.btn-secondary`, `.btn-outline` classes from `app.css`
- Modern sections use `py-24 md:py-32` for generous spacing
- Hero sections use `.gradient-navy` background class
- Dropdowns use Alpine.js with `x-cloak` for proper initial state

---

## 6. Design System

### Colors (Tailwind Config)
| Name | Hex | Usage |
|------|-----|-------|
| `maisara-navy` | `#1E2F45` | Primary dark (header, footer, backgrounds) |
| `maisara-ember` | `#D97A4A` | Accent / CTA (buttons, highlights) |
| `maisara-ivory` | `#F5F0E5` | Light section backgrounds |
| `maisara-navy-light` | `#2A4060` | Hover states |
| `maisara-navy-dark` | `#152238` | Footer, deep backgrounds |
| `maisara-ember-light` | `#E88A5A` | Hover states |
| `maisara-ember-dark` | `#C06A3A` | Active states |

### Typography
| Class | Family | Usage |
|-------|--------|-------|
| `font-display` | Playfair Display | Headlines |
| `font-body` | Inter | Body text (EN) |
| `font-arabic` | Noto Naskh Arabic, Cairo | Body text (AR) |
| `text-balance` | — | Balanced text wrapping on headings |

### Custom CSS Classes (app.css)
- `.section-title` — Large display heading
- `.section-subtitle` — Centered lead paragraph
- `.card` — White card with hover lift and border
- `.card-ember` — Ember-tinted card variant
- `.btn-primary` — Ember background CTA
- `.btn-secondary` — Navy background secondary
- `.btn-outline` — Ember outlined button
- `.gradient-navy` — Navy gradient hero background
- `.gradient-ember` — Ember gradient (sparingly)
- `[x-cloak]` — Hides Alpine components before initialization

### Spacing Rhythm
- Sections: `py-24 md:py-32`
- Section gaps: `mb-16 md:mb-24`
- Card gaps: `gap-6` to `gap-8`
- Content max width: `max-w-7xl` with `px-4 sm:px-6 lg:px-8`

---

## 7. Deployment

### CI/CD Pipeline
Pushing to `main` triggers two GitHub Actions workflows:

1. **Build and Push App Docker Image** (`.github/workflows/deploy-app.yml`)
   - Builds PHP-FPM image from `Dockerfile`
   - Pushes to `ghcr.io/maisarasolutions-ai/maisara-app:latest`
   - Also tags with short SHA for rollback

2. **Build and Push Nginx Docker Image** (`.github/workflows/deploy-nginx.yml`)
   - Builds from `nginx/` directory
   - Pushes to `ghcr.io/maisarasolutions-ai/maisara-nginx:latest`

### Production Stack (docker-compose.yml)
| Service | Image | Role |
|---------|-------|------|
| `app` | `ghcr.io/maisarasolutions-ai/maisara-app:latest` | PHP-FPM + Laravel |
| `nginx` | `ghcr.io/maisarasolutions-ai/maisara-nginx:latest` | Static assets + PHP proxy |
| `postgres` | `postgres:16-alpine` | Database |
| `redis` | `redis:7-alpine` | Cache + sessions |
| `cloudflared` | `cloudflare/cloudflared:latest` | Cloudflare Tunnel |
| `watchtower` | `containrrr/watchtower:latest` | Auto-updates `app` container every 5 min |

### VPS Paths & Secrets
- Compose file: `/opt/maisarasolutions/docker-compose.yml`
- Environment: `/opt/maisarasolutions/maisara.env`
- Cloudflare Tunnel token: `/etc/cloudflared/maisarasolutions/token` (mounted read-only)
- Database volume: `maisara_pgdata`
- Redis volume: `maisara_redisdata`
- Shared public assets volume: `app_public`

### How Watchtower Works
- Polls GHCR every **5 minutes**
- Only updates containers with label `com.centurylinklabs.watchtower.enable=true`
- After updating the `app` container, the entrypoint (`docker-entrypoint.sh`) runs:
  ```sh
  rsync -a --delete /tmp/public-assets/ /var/www/html/public/
  ```
  This syncs freshly built Vite assets from the image into the shared volume.

### Manual VPS Deployment
If you need to force-update immediately:

```bash
cd /opt/maisarasolutions

# Pull latest images
docker compose --env-file /opt/maisarasolutions/maisara.env pull

# Restart stack
docker compose --env-file /opt/maisarasolutions/maisara.env up -d

# Rebuild Laravel caches
docker compose --env-file /opt/maisarasolutions/maisara.env exec app php artisan config:cache
docker compose --env-file /opt/maisarasolutions/maisara.env exec app php artisan route:cache
docker compose --env-file /opt/maisarasolutions/maisara.env exec app php artisan view:cache

# Check status
docker compose --env-file /opt/maisarasolutions/maisara.env ps
```

### Rollback Procedure
Images are tagged with both `latest` and short SHA. To rollback:

```bash
# Pull the previous image
docker pull ghcr.io/maisarasolutions-ai/maisara-app:<previous-sha>

# Temporarily pin in docker-compose.yml, then:
docker compose --env-file /opt/maisarasolutions/maisara.env up -d app
```

Database volumes are **not** affected by rollbacks.

---

## 8. Key Files to Know

| File | Purpose |
|------|---------|
| `app/Http/Controllers/Controller.php` | Base controller; loads content + page data automatically |
| `app/Services/ContentService.php` | Loads markdown by module/locale, applies RTL classes |
| `resources/views/layouts/app.blade.php` | Master layout; includes Alpine.js CDN, RTL `dir` attribute |
| `resources/views/components/shared/header.blade.php` | Sticky header with dropdown nav |
| `resources/css/app.css` | Tailwind imports + modern design system classes |
| `tailwind.config.js` | Maisara color palette and font families |
| `config/app.php` | Locale config (`available_locales`, `locale`, `fallback_locale`) |
| `bootstrap/app.php` | Middleware aliases: `locale`, `segment` |
| `routes/web.php` | All routes in locale-prefixed group |
| `lang/en/messages.php` | English UI strings (352 keys) |
| `lang/ar/messages.php` | Arabic UI strings (352 keys) |
| `deploy.sh` | VPS deployment helper script |

---

## 9. Content Management

### Adding a New Page/Module

1. **Create content markdown:**
   - `resources/content/{module}/index.md` (English)
   - `resources/content/{module}/ar.md` (Arabic)

2. **Create page data:**
   - `resources/data/en/{module}/index.php`
   - `resources/data/ar/{module}/index.php`

3. **Create Blade view:**
   - `resources/views/{module}/index.blade.php`

4. **Add route:**
   - Add to the locale group in `routes/web.php`

5. **Add controller method:**
   - Or use the base `Controller::view()` if the view path matches the route

### Content Style Guidelines
- English: professional, direct, sovereignty-focused
- Arabic: Egypt/Saudi tone, modern standard Arabic, no English copy-paste
- RTL is handled automatically; no manual `dir` attributes needed in content
- Use markdown headings, lists, bold, italic, and links

---

## 10. Known Considerations

### 10.1 ContentService Limitations
- Markdown parser is basic (headings, lists, bold, italic, links only)
- No tables, images, or complex markdown currently supported
- Content is injected as raw HTML via `{!! $content !!}` — ensure content is sanitized

### 10.2 Alpine.js
- Loaded via CDN (`alpinejs@3.x.x/dist/cdn.min.js`)
- Used for: dropdown menus, mobile menu toggle
- `x-cloak` CSS rule is required to prevent flash of uninitialized state

### 10.3 Caching
- Production uses `config:cache`, `route:cache`, `view:cache`
- When adding new translation strings or routes, caches must be rebuilt
- Content markdown files are read at runtime (not cached)

### 10.4 Browser Cache
- Vite assets are fingerprinted (`app-{hash}.css`, `app-{hash}.js`)
- HTML responses may be cached by Cloudflare/CDN
- After deployment, verify with hard refresh (`Ctrl+Shift+R`)

### 10.5 GitHub Actions Secrets
- Workflows require `GHCR_TOKEN` secret for Docker registry authentication
- The token must have `packages: write` permission on the repository

### 10.6 Database
- PostgreSQL 16 in production
- Migrations are manual — run `php artisan migrate --force` after deployment if needed
- No seeders are currently configured

---

## 11. Common Tasks Reference

### Adding a New Translation String
1. Add key/value to `lang/en/messages.php` and `lang/ar/messages.php`
2. Use `__('key')` in Blade templates
3. Rebuild caches on production: `php artisan view:cache`

### Updating Content
- Edit the markdown file in `resources/content/{module}/`
- No rebuild needed — content is loaded at runtime

### Adding a New Service Card
1. Update `resources/data/en/services/index.php` and `ar/services/index.php`
2. Or edit `resources/views/services/index.blade.php` directly for static cards

### Running Tests
```bash
docker compose --env-file maisara.env exec app php artisan test
```

### Checking Live Logs
```bash
docker compose --env-file /opt/maisarasolutions/maisara.env logs -f app
docker compose --env-file /opt/maisarasolutions/maisara.env logs -f nginx
```

---

## 12. Directory Quick Reference

| Path | Description |
|------|-------------|
| `resources/content/{module}/` | Markdown content files |
| `resources/data/{locale}/{module}/index.php` | Structured page data |
| `resources/views/layouts/app.blade.php` | Master layout |
| `resources/views/components/shared/` | Reusable components |
| `resources/css/app.css` | Global styles + design system |
| `resources/js/app.js` | Frontend utilities |
| `lang/{locale}/messages.php` | Custom translation strings |
| `app/Services/ContentService.php` | Content loader |
| `app/Http/Controllers/Controller.php` | Base controller |
| `app/Http/Middleware/DetectLocale.php` | Locale middleware |
| `app/Http/Middleware/DetectSegment.php` | Segment middleware |
| `routes/web.php` | Route definitions |
| `config/app.php` | App configuration |
| `bootstrap/app.php` | Middleware registration |
| `.github/workflows/` | CI/CD pipelines |
| `docker-compose.yml` | Production stack |
| `Dockerfile` | App image definition |
| `nginx/` | Nginx configuration |
| `deploy.sh` | VPS deployment script |

---

## 13. Contact & Ownership

- **Repository:** `maisarasolutions-ai/maisara-solutions-marketing-website`
- **Branch:** `main`
- **Default Branch Protection:** Enabled (requires PR/review if configured)
- **Container Registry:** `ghcr.io/maisarasolutions-ai/`

---

*Last updated: 2026-07-27*
*Maintainer: Maisara Solutions Engineering*
