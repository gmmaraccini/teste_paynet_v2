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

Video de demonstração

https://vimeo.com/manage/videos/985352641/fec7fedbe5

cp .env.example .env
( deve-se configurar os dados do banco e tambem do smtp ( Sugestão : MailTrap ))
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=senhafalsa

