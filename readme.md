# English

## Materate Challenge

### Configuring host

1 - Access `Movies` folder by the terminal

2 - Execute `composer install`

3 - Create a mysql DB using `CREATE DATABASE laravel;`

4 - Open `.env` file and edit the following lines:
```
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=null
```

5 - Execute `php artisan migrate --seed`

6 - Execute `php artisan jwt:secret`

7 - Execute `php artisan serve`

8 - You can test all rotes using Postman with `email:test@test.com` and `password:admin`

### Informations
Laravel 5.5 version with [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki) plugin for authentication and [PHPUnit](https://phpunit.de/) for unit and MySQL tests.

### Documentations
- [Laravel](https://laravel.com/docs/5.5)
- [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki)
- [PHPUnit](https://phpunit.de/documentation.html)
- [Postman](https://www.getpostman.com/docs/)

# Português

## Teste Materate

### Configurando o servidor
1 - Acesse a pasta `Movies` pelo terminal

2 - Execute `composer install`

3 - Crie um banco de dados no mysql: `CREATE DATABASE laravel;`

4 - Abra o arquivo `.env` e configure as seguintes linhas:
```
    DB_DATABASE=laravel
    DB_USERNAME=root
    DB_PASSWORD=null
```

5 - Execute `php artisan migrate --seed`

6 - Execute `php artisan jwt:secret`

7 - E para abrir o servidor: `php artisan serve`

8 - Teste as rotas pelo Postman usando os parametros `email:test@test.com` e `password:admin`


### Informações
Utilizada versão 5.5 do Laravel, utilizando o plugin [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki) para autenticação e [PHPUnit](https://phpunit.de/) para realização de testes unitários e de conexão com banco de dados MySQL

### Documentações
- [Laravel](https://laravel.com/docs/5.5)
- [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki)
- [PHPUnit](https://phpunit.de/documentation.html)
- [Postman](https://www.getpostman.com/docs/)
