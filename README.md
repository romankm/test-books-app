Test Books App

Make sure:
 - you have installed docker and docker-compose
 - http://localhost:8888 is not used

php artisan key:generate
1. Run:
    cp .env.example .env
2. Run:
    docker-compose up -d --build
    docker exec test-books-app bash -c 'composer install'
    docker exec test-books-app bash -c 'php artisan key:generate'
    docker exec test-books-app bash -c 'php artisan migrate:fresh --seed'
3. Visit: http://localhost:8888
4. If you don't need app anymore run:
    docker-compose down
