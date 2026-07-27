#!/bin/bash
set -e
URL="${1:-https://maisarasolutions.com/health}"
EXPECTED="${2:-200}"
STATUS=$(curl -s -o /dev/null -w '%{http_code}' "$URL")
if [ "$STATUS" != "$EXPECTED" ]; then
  echo "$(date '+%Y-%m-%d %H:%M:%S') ALERT: $URL returned $STATUS (expected $EXPECTED)" >> /var/log/maisara-monitor.log
fi
