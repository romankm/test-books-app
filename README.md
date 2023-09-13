Test Books App

Make sure:
 - you have installed docker and docker-compose
 - http://localhost:8888 is not used

1. Run: 
    docker exec books_php_1 bash -c 'composer install'
2. Run: 
    docker exec books_php_1 bash -c 'php artisan migrate:fresh --seed'
3. Visit: http://localhost:8888
4. If you don't need app anymore run:
    docker-compose down
