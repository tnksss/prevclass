<p align="center"><img src="https://github.com/tnksss/prevclass/blob/master/public/prevclass.png"></p>

# PrevClass: Sistema para Agilizar o Conselho de Classe
PrevClass é um aplicação web que realiza o cadastro de colégio, cursos, secretários, professores, turmas e alunos com o propósito de o professor avaliar pedagogicamente o aluno.

[![Assita ao Vídeo](https://i.imgur.com/KQtxYNQ.png)](https://www.youtube.com/watch?v=-1fqzNtJudU&t=34s)

## Pré-requisitos

- PHP >= 7.0
- Laravel >= 5.5
- MySQL
- Apache ou Nginx

## Instalação
- ``$ git clone https://github.com/tnksss/prevclass.git``
- ``$ cd prevclass``
- ``$ composer update``
- atualize o arquivo .env
- mysql > ``create database prevclass;``
- ``$ php artisan migrate``
- ``$ php artisan db:seed``

## Utilização
  ### Usuário Administrador
 - Acesse a url localhost:8000/admin
 - Usuário: admin@teste.com
 - Senha: abc123

  ### Usuário Secretário
 - Acesse a url localhost:8000/manager
 - Usuário: manager@teste.com
 - Senha: abc123
 
  ### Usuário Professor
 - Acesse a url localhost:8000
 - Usuário: teacher@teste.com
 - Senha: abc123
