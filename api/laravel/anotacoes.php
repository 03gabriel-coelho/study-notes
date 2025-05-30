COMPOSER:

composer create-project --prefer-dist laravel/laravel nome_projeto "8.*" ----- > criar projeto laravel 8

php artisan list -> Ver lista de comandos do artisan

php artisan migrate ----- > criar as tabelas do banco de dados
php artisan db:seed ----- > popular o banco de dados com os dados do seeder
php artisan key:generate ----- > gerar a chave de segurança do projeto

php artisan serve  -----
php -S localhost:8000 ----- > iniciar servidor local

php artisan make:controller SobreNosController ----- > criar controller
php artisan route:list ----- > listar rotas
php artisan make:model SiteContato ------> criar model
php artisan make:model SiteContato -m ------> criar model e migration juntos
php artisan make:seeder SiteContatoSeeder ------> criar seeder
php artisan make:model -mcr SiteContato ------> criar model, migration e controller juntos

php artisan config:cache ----- > limpar cache de configuração

DOCUMENTAÇÃO:
Visualizar as colunas
https://laravel.com/docs/11.x/migrations#column-method-boolean

DEBUGANDO:
dd($variavel) ----- > imprime a variável e para a execução do código
dump($variavel) ----- > imprime a variável e continua a execução do código
print_r($variavel) ----- > imprime a variável e continua a execução do código
var_dump($variavel) ----- > imprime a variável e continua a execução do código

METODOS:
isset($variavel) ----- > verifica se a variável existe ou não, retorna true ou false
empty($variavel) ----- > verifica se a variável está vazia ou não, retorna true ou false





