#!/usr/bin/env bash
set -euo pipefail

# Read current version from composer.json
CURRENT=$(jq -r '.version' composer.json)

# Split into parts
IFS='.' read -r MAJOR MINOR PATCH <<< "$CURRENT"

# Bump minor, reset patch
NEW_VERSION="${MAJOR}.${MINOR}.$((PATCH + 1))"

# Write back
jq --arg v "$NEW_VERSION" '.version = $v' composer.json > composer.tmp.json
mv composer.tmp.json composer.json

echo "$NEW_VERSION"