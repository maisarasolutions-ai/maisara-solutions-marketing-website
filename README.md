# Maisara Solutions Marketing Website

## Tech Stack

- **Backend**: Laravel 11
- **Frontend**: Blade, Tailwind CSS, Vite
- **Database**: PostgreSQL 16
- **Cache/Sessions**: Redis 7
- **Infrastructure**: Docker, Docker Compose, Nginx, PHP-FPM
- **CI/CD**: GitHub Actions, GitHub Container Registry (GHCR)
- **Tunnel**: Cloudflare Tunnel (remotely managed, token-based)
- **DNS**: Cloudflare
- **VPS**: Ubuntu (existing production site co-hosted)

## Local Development

Prerequisites:
- Docker and Docker Compose
- Node.js 18+
- PHP 8.3 (optional, for artisan commands outside containers)

Start the stack with the custom environment file:

```bash
docker compose --env-file maisara.env up -d
```

All `docker compose` commands must include `--env-file maisara.env`:

```bash
docker compose --env-file maisara.env ps
docker compose --env-file maisara.env exec app php artisan migrate --force
docker compose --env-file maisara.env logs -f
```

The `docker-compose.override.yml` mounts the local directory into the app container and enables `APP_DEBUG=true` for local development.

## CI/CD

Pushing to `main` triggers two GitHub Actions workflows:
- `.github/workflows/deploy-app.yml` builds and pushes the PHP-FPM image to `ghcr.io/<owner>/maisara-app:latest`
- `.github/workflows/deploy-nginx.yml` builds and pushes the Nginx image to `ghcr.io/<owner>/maisara-nginx:latest`

Images are tagged with both `latest` and a short SHA for rollback capability.

## Watchtower

A `watchtower` container runs inside the stack and polls GHCR every 5 minutes. It only updates the `maisara-app` container (label-enabled). After an update, the entrypoint synchronizes fresh assets into the shared volume automatically.

## Rollback

Rollback uses immutable SHA tags published by CI:

```bash
docker pull ghcr.io/<owner>/maisara-app:abc123
# Temporarily pin the image tag in docker-compose.yml, then:
docker compose --env-file maisara.env up -d app
```

Database volumes are not affected by rollbacks.

## VPS Deployment

1. Prepare `/opt/maisarasolutions` on the VPS.
2. Copy `docker-compose.yml` and create `maisara.env` with secrets.
3. Start the stack:
   ```bash
   docker compose --env-file maisara.env up -d
   ```
4. Run one-time Laravel setup:
   ```bash
   docker compose --env-file maisara.env exec app php artisan config:cache
   docker compose --env-file maisara.env exec app php artisan route:cache
   docker compose --env-file maisara.env exec app php artisan view:cache
   ```
5. If the deployment includes migrations, run them manually:
   ```bash
   docker compose --env-file maisara.env exec app php artisan migrate --force
   ```

## Tailscale SSH Access

Connect to the VPS via Tailscale SSH. No host ports are exposed; the Cloudflare Tunnel routes traffic internally to Nginx.
