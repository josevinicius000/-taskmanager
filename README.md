## Tecnologias Utilizadas
* Laravel
* MySQL - Banco de dados
* Bootstrap/Tailwind
* Vue.js

## Pré-requisitos
* XAMPP
* Composer
* Git (opcional, para clonar o repositório)
* NPM


## Instalação
1. Clone ou baixe o repositório
* Usando Git:

- Navegue até a pasta do XAMPP
cd C:\xampp\htdocs\

- Clone o projeto
git clone https://github.com/josevinicius000/-taskmanager.git

- Entre na pasta do projeto
cd taskmanager 

* Download manual:

- Baixe o projeto como ZIP

- Extraia a pasta para C:\xampp\htdocs\

- Renomeie a pasta para taskmanager (se necessário)

2. Instale as dependências do PHP

- Execute
composer install

## Configuração do Banco de Dados
1. Inicie os servidores do XAMPP

- Abra o XAMPP Control Panel

- Clique em Start para o módulo Apache

- Clique em Start para o módulo MySQL

2. Crie o banco de dados

* Via linha de comando:
mysql -u root -p
CREATE DATABASE taskmanager CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
EXIT;

3. Configure a conexão no arquivo .env.
Copie o todo conteúdo do arquivo .env.example no arquivo .env:

.env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=taskmanager
DB_USERNAME=root
DB_PASSWORD=

4. Execute as migrações.

- Execute as migrations:

php artisan migrate

- Para popular o banco com dados execute as seeders:

php artisan db:seed

5. Gere a chave da aplicação.

php artisan key:generate


## Insruções para uso

- Crie um usuário em Cadastrar.

- Teste as funcionalidades vizualizar, editar e apagar com as tarefas criadas para teste.

- Crie novas tarefas.

- Realize log-out.

- Crie outro usuário e crie novas tarefas (Verificar que apenas as tarefas criadas pelo usuário autenticado são listadas).

- Testar filtro de tarefas por nome.

- Testar filtro de data de ínicio e data de fim.
