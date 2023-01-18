@servers(['main' => ['deploy@157.245.40.234']])

@task('deploy', ['on' => 'main'])
    cd /var/www/html/youdomain.com
    php artisan down
    git checkout main
    git pull origin main
    composer install --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
    php artisan migrate --force
    php artisan cache:clear
    php artisan config:cache
    php artisan route:cache
    php artisan up
@endtask
