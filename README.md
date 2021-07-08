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

GET /api/vendas

GET /api/vendas/:id

POST /api/vendas
@body: valor, vendedor

PUT /api/vendas/:id
@body: valor, vendedor

DELETE /api/vendas/:id




POST    /api/logout
```
