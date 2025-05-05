COMPOSER:

composer create-project --prefer-dist laravel/laravel nome_projeto "8.*" ----- > criar projeto laravel 8

php artisan list -> Ver lista de comandos do artisan

php artisan migrate ----- > criar as tabelas do banco de dados
php artisan serve  -----
php -S localhost:8000 ----- > iniciar servidor local
php artisan make:controller SobreNosController ----- > criar controller
php artisan route:list ----- > listar rotas
php artisan make:model SiteContato ------> criar model
php artisan make:model SiteContato -m ------> criar model e migration juntos
php artisan make:seeder SiteContatoSeeder ------> criar seeder
php artisan make:model -mcr SiteContato ------> criar model, migration e controller juntos

DOCUMENTAÇÃO:
Visualizar as colunas
https://laravel.com/docs/11.x/migrations#column-method-boolean