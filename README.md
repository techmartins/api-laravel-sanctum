# Laravel REST API with Sanctum

Esta é uma API de teste com CRUD básico e autenticação com Sanctum

## Usage
# Run the webserver on port 8000
php artisan serve
```

## Routes

```
# Public

GET   /api/vendedores

GET   /api/vendedores/:id

POST   /api/vendedores
@body: nome, email

PUT   /api/vendedores/:id
@body: nome, email

DELETE  /api/vendedores/:id

POST    /api/logout
```
