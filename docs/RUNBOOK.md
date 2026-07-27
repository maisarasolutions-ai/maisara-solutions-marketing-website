# Maisara Solutions - Operations Runbook

## Access
- VPS: `root@100.86.179.76` (Tailscale)
- VPS project path: `/opt/maisarasolutions`
- GitHub repo: `maisarasolutions-ai/maisara-solutions-marketing-website`
- GitHub Container Registry: `ghcr.io/maisarasolutions-ai/maisara-app`

## Health Checks
- App health: `docker compose -f /opt/maisarasolutions/docker-compose.yml exec app curl -s http://localhost:9000/health`
- Nginx test: `docker exec maisara-nginx curl -s -o /dev/null -w '%{http_code}' http://localhost:80/en`
- Site: `curl -s -o /dev/null -w '%{http_code}' https://maisarasolutions.com/en`

## Common Tasks

### Restart app
```bash
ssh root@100.86.179.76
cd /opt/maisarasolutions
docker compose restart app
```

### Migrate database
```bash
cd /opt/maisarasolutions
docker compose exec app php artisan migrate --force
```

### Clear caches
```bash
cd /opt/maisarasolutions
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
```

### View logs
```bash
docker compose -f /opt/maisarasolutions/docker-compose.yml logs -f app
docker compose -f /opt/maisarasolutions/docker-compose.yml logs -f nginx
docker compose -f /opt/maisarasolutions/docker-compose.yml logs -f cloudflared
```

### Backup database
```bash
/opt/maisarasolutions/backup.sh
ls -lh /opt/maisarasolutions/backups/
```

## Monitoring
- Health endpoint: https://maisarasolutions.com/health
- DB backups: daily at 02:00, stored in `/opt/maisarasolutions/backups/`, 7-day retention
- Log retention: 14 days (Laravel daily log rotation)
