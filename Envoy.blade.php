@servers(['web' => '127.0.0.1'])

@task('deploy')
    composer install --optimize-autoloader --no-dev
    php artisan config:cache
    php artisan route:cache
    php artisan migrate
@endtask
