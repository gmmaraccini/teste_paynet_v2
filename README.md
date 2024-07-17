Projeto Paynet de autenticação Sanctum

Sera criado uma aplicação na porta 
localhost:8000 e mysql:3306
O docker-compose utilizara 
a rede laravel laravel-network,
caso de erro em identificação 
entre os containers, deve ser dado o comando "docker network create laravel-network
"

Após a criação, entrar na pasta do projeto teste_paynet_v2 e rodar comandos
- composer install
- php artisan migrate
- php artisan queue:work

Paginas 

http://localhost:8000/home - Pagina principal protegida
http://localhost:8000/login - Pagina de login
http://localhost:8000/register - Pagina de cadastro
http://localhost:8000/password/reset - Pagina de reset

