Делаем файл .env
там добавляем вместо настроек MySQL
DB_CONNECTION=pgsql
DB_HOST=db
DB_PORT=5432
DB_DATABASE=mdr
DB_USERNAME=svara
DB_PASSWORD=UtJ5Gwiq1rRg
POSTGRES_PORT=5442

Установка в терминале:
docker compose build - билдим проект
docker compose up -d - поднимаем контейнеры
Если вы разворачиваете проект на винде то следующие команды надо делать в Docker Desktop в терминале fpm контейнера
composer install
php artisan key:generate
php artisan migrate

Если база данных не подключается то
Остановите контейнеры Docker compose down

в проекте в папке .docker/postgres
удалите папки data и test-data
и заново запустите проект docker compose up -d
