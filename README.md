# Ozon-style marketplace on OpenCart (local run guide)

Это не 1:1 копия ozon.ru, а проект на OpenCart с витриной и админкой в стиле маркетплейса.

## Что уже есть
- Витрина с каталогом, карточками товаров, поиском, корзиной, оформлением заказа, личным кабинетом (стандартные функции OpenCart).
- Админ-панель с управлением товарами, категориями, заказами, покупателями, модулями и отчётами.
- Ozon-inspired оформление главной страницы и dashboard админки.

## Запуск локально через `index.php`

### 1) Подготовь БД MySQL
Создай базу, например `opencart`, и импортируй дамп своего магазина.

### 2) Задай переменные окружения
```bash
export APP_ENV=local
export HTTP_SERVER=http://localhost:8080/
export DB_HOSTNAME=127.0.0.1
export DB_PORT=3306
export DB_DATABASE=opencart
export DB_USERNAME=root
export DB_PASSWORD=''
export DB_PREFIX=oc_
```

### 3) Запусти встроенный PHP-сервер
```bash
php -S 0.0.0.0:8080 dev-router.php
```

### 4) Открой в браузере
- Витрина: `http://localhost:8080/`
- Админка: `http://localhost:8080/admin/`

## Важно
- Если не задать `APP_ENV=local`, будут использоваться production-настройки из `config.php`.
- Для “всех функций” нужны корректные данные в БД (товары, категории, пользователи, настройки модулей).
