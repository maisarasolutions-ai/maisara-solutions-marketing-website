#!/bin/bash
set -e

# Deploy script for Maisara Solutions Marketing Website
# This script pulls the latest images and restarts the stack on the VPS

echo "Pulling latest images..."
docker compose --env-file /opt/maisarasolutions/maisara.env pull

echo "Restarting services..."
docker compose --env-file /opt/maisarasolutions/maisara.env up -d

echo "Running Laravel optimizations..."
docker compose --env-file /opt/maisarasolutions/maisara.env exec app php artisan config:cache
docker compose --env-file /opt/maisarasolutions/maisara.env exec app php artisan route:cache
docker compose --env-file /opt/maisarasolutions/maisara.env exec app php artisan view:cache

echo "Clearing old images..."
docker image prune -f

echo "Deployment complete!"
echo "Checking service status..."
docker compose --env-file /opt/maisarasolutions/maisara.env ps
