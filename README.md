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

Infelizmente não foi possível comtemplar todos os requisitos solicitados devido a alguns fatores

Ambientação com uma nova linguagem (Php), framework (Laravel) e ORM (Doctrine)

Integração entre framework e ORM. Por padrão, o Laravel faz uso do Eloquent e para utilizar um ORM
fora do escopo do framework são necessárias configurações a mais. Isso causa uma curva de aprendizado extra e demanda mais tempo para alinhar de forma que possa funcionar. Apesar de não haver nenhuma dificuldade em usar o Doctrine e entender como ele funciona, ainda assim, houve o trabalho de aprender como integrá-lo com o Laravel.

Recomendo que seja utilizado o Postman ou Insomnia para os testes aos endpoints da API, são ferramentas bastante conhecidas e é possível que já possua conhecimento delas

Pontos de melhoria:

-   testes
-   retorno com códigos HTTP adequados
-   padrões e arquiteturas mais utilizadas
-   tratamento de exceptions
