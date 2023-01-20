@servers(['main' => ['deploy@157.245.40.234']])

@setup
    $dir = "/var/www/html/youdomain.com"
@endsetup

@story('full-deploy')
    site-down
    git
    backend
    site-up
@endstory

@task('site-down')
    cd {{ $dir }}
    php artisan down
@endtask

@task('git')
    cd {{ $dir }}
    git checkout main
    git pull origin main
@endtask

@task('backend')
    cd {{ $dir }}
    composer install --no-dev --no-interaction --no-plugins --no-progress --no-scripts --optimize-autoloader
    php artisan migrate --force
    php artisan cache:clear
    php artisan config:cache
    php artisan route:cache
@endtask

@task('site-up')
    cd {{ $dir }}
    php artisan up
@endtask
