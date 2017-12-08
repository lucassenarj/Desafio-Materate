# Teste Materate

## Configurando o servidor
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

8 - Teste as rotas pelo Postman usando os parametros `email:lucassena.rj@gmail.com` e `password:admin`


## Informações
Utilizada versão 5.5 do Laravel, utilizando o plugin [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki) para autenticação, o mesmo não apresentava compatibilidade total com a versão atual do framework, então foram feitas adaptações para o funcionamento.

## Documentações
- [Laravel](https://laravel.com/docs/5.5)
- [JWT Auth](https://github.com/tymondesigns/jwt-auth/wiki)
- [Postman](https://www.getpostman.com/docs/)
