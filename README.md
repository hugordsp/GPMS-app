## Info.

Backend em laravel que gera api com autenticação e CRUD para uma aplicação de gerenciamento de projetos.
O frontend encontra-se no seguinte repositório: https://github.com/hugordsp/teste-frontend

## Instruções

Após baixar este repositório e o do front end, execute o seguinte comandos no terminal:

Backend (gpms-app)

Colocar arquivo .env na raiz do repositório;
Executar comando no terminal, na raiz do repositório:
    composer install
    docker compose up -d (certifique-se q tenha a engine e o docker composer)
    php artisan migrate (cria as tabelas no banco de dados)
    php artisan db:seed --class=UserSeeder (gera um usuário no backend, é necessário ver qual ele gera no próprio banco)
    php artisan serve (iniciar servidor localhost para a api)
    
Frontend (teste-frontend)
    npm install
    npm run dev (iniciar servidor web)

