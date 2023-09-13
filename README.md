Test Books App

Make sure:
 - you have installed docker and docker-compose
 - http://localhost:8888 is not used

1. Run:
    cp .env.example .env
2. Run:
   docker-compose up -d --build
3. Run: 
    docker exec test-books-app bash -c 'composer install'
4. Run: 
    docker exec test-books-app bash -c 'php artisan migrate:fresh --seed'
5. Visit: http://localhost:8888
6. If you don't need app anymore run:
    docker-compose down
