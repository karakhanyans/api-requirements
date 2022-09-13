## Products API

To install this project, after cloning the repo do following steps:

Install composer

`composer install`

Copy .env.example file to .env

`cp .env.example .env`

Run following commands

```
php artisan key:generate
```

Create a database `products_api` and add it to .env

```
php artisan migrate --seed // it will import fake products
```

Specify currency in .env file: `APP_CURRENCY=EUR`, by default it set to EUR

## Endpoints

`GET /api/products` - To get full list of products

Available filters

- category - will find products by category with exact match
- price - will find products by price with exact match

```
GET /api/products?category=insurance
GET /api/products?price=250000
GET /api/products?category=insurance&price=250000
```
