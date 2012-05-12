#!/bin/sh
set -xe

# Symlink assets
php frontend/console assets:install web --symlink
php backend/console assets:install web --symlink

# Rebuild propel default
php frontend/console propel:database:drop --force --connection=default
php frontend/console propel:database:create --connection=default

# Rebuild propel models
php frontend/console propel:build --verbose

# Insert propel sql
php frontend/console propel:sql:insert --force --connection=default
# php frontend/console propel:fixtures:load --dir=src/You/YourBundle/Resources/Fixtures/ --connection=default

# Create the demo user fos
#php backend/console fos:user:create admin admin@demo.com admin
#php backend/console fos:user:promote admin ROLE_ADMIN
#php backend/console fos:user:create user user@demo.com user

