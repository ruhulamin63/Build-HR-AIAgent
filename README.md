# Build-HR-AIAgent

## For Laravel 11, the minimum PHP version required is PHP 8.2.

```bash
git clone https://github.com/ruhulamin63/Build-HR-AIAgent.git
```

```bash
cp .env.example .env
```

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-db-name
DB_USERNAME=root
DB_PASSWORD=
```

```bash
composer install
```

```bash
php ar
tisan migrate
```
```bash
php artisan serve
```

### Public Access Route
```bash
http://127.0.0.1:8000/api/chat
```

*** Copyright@reserved by Ruhul Amin ***