Test Books App

1. Run: docker exec books_php_1 bash -c 'composer install'
2. Run: docker exec books_php_1 bash -c 'php artisan migrate:fresh --seed'
3. Visit http://localhost:8888
