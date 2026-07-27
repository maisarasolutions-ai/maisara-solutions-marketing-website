# Rollback Procedure

## Rollback to Previous Image

### Step 1: Identify working image
```bash
ssh root@100.86.179.76
docker images ghcr.io/maisarasolutions-ai/maisara-app
```

### Step 2: Edit docker-compose to pin image
```bash
cd /opt/maisarasolutions
nano docker-compose.yml
```

Change the app image line to the known-good tag:
```yaml
image: ghcr.io/maisarasolutions-ai/maisara-app:TAG
```

### Step 3: Restart application
```bash
docker compose up -d app
docker compose ps
```

### Step 4: Clear caches
```bash
docker compose exec app php artisan optimize:clear
docker compose exec app php artisan config:cache
```

### Step 5: Verify
```bash
docker exec maisara-nginx curl -s -o /dev/null -w '%{http_code}' http://localhost:80/en
curl -s -o /dev/null -w '%{http_code}' https://maisarasolutions.com/en
```

## Rollback Database

If migration caused issues:
```bash
cd /opt/maisarasolutions
docker compose exec app php artisan migrate:rollback --step=1 --force
```

## Emergency Full Rollback

```bash
# Stop all services
cd /opt/maisarasolutions
docker compose down

# Restore docker-compose from git
git checkout HEAD -- docker-compose.yml .env

# Start services
docker compose up -d

# Verify health
docker compose ps
docker exec maisara-nginx curl -s -o /dev/null -w '%{http_code}' http://localhost:80/en
```

## Watchtower Rollback
Watchtower does not rollback automatically. To manually rollback:
```bash
cd /opt/maisarasolutions
docker compose pull app && docker compose up -d app
```
