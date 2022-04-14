## Sobre

O projeto foi feito utilizando Php 8, Laravel 9 e Doctrine 2.

Para rodar o projeto em sua máquina local:

-   clonar o repositório
-   abrir um terminal no diretório e usar o comando composer install ou composer updte
-   comando php artisan serve para inicializar o servidor

Vale atentar-se que é necessário conectar a uma base de banco de dados própria, um exemplo de como
disponibilizar a conexão pode ser encontrado no arquivo .env.example. O banco escolhido foi o MySQL e
o script para criação das tabelas está em db-script.sql

Para visualizar as rotas disponíveis para pessoas e contatos precisa apenas utilizar o comando no terminal no diretório do projeto

-   php artisan route:list


Pontos de melhoria:

-   testes
-   retorno com códigos HTTP adequados
-   padrões e arquiteturas mais utilizadas
-   tratamento de exceptions
