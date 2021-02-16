# Projeto Laravel 8 

Projeto de estudo do framework laravel 8, aplicando Repository Pattern. 

## Setup do projeto

- Linguagem PHP 7.2
- Framework Laravel 8
- Arquitetura MVC
- Padrão de Projeto Repository Pattern.
- Testes com PHP UNIT.

## Requisitos
- PHP 7.2
- APACHE
- Banco de Dados (MySQL)
- Composer

## Instalação
- Clonar o Projeto
```bash
composer update
```
```bash
composer install
```
- Configurar o .env (Utilizar o .env.example)
- Rodar as migrations
```bash
php artisan migrate
```
- Rodar o projeto
```bash
php artisan serve
```
## Padrão MVC
O Laravel utiliza o padrão MVC (Model, View e Controller) que, basicamente, funciona da seguinte forma:

- Model é a camada responsável pela parte lógica da aplicação, ou seja, todos os recursos da sua aplicação (consultas ao BD, validações, notificações, etc), mas ele não sabe quando isso deve ser feito, a camada de model apenas tem o necessário para que tudo aconteça, mas não sabe quando irá executar.
- View é a camada responsável por exibir dados para o usuário, seja em páginas HTML, JSON, XML, etc. A camada View não possui responsabilidade de saber quando vai exibir os dados, apenas como irá exibi-los.
- Controller é o famoso “meio-de-campo” da aplicação. Essa é a camada que sabe quem chamar e quando chamar para executar determinada ação.

<img src="https://dkrn4sk0rn31v.cloudfront.net/2019/05/07115234/Laravel-3.png" >

## Repository Pattern
Existem muitas maneiras de o laravel interpretar a funcionalidade CRUD. Mas eu pessoalmente sugiro o repository pattern de serviço porque é limpo e sustentável. O conceito de repositórios e serviços garante que você escreva código reutilizável e ajuda a manter seu controlador o mais simples possível, tornando-os mais legíveis.

Os repositórios são geralmente um empacotador comum para seu modelo e o lugar onde você escreveria diferentes consultas em seu banco de dados. Um serviço, por outro lado, é uma camada para lidar com toda a lógica de seu aplicativo. Com base na experiência, é realmente útil separar a lógica e o invólucro do modelo, especialmente quando você está trabalhando em equipe ou grandes projetos.

<img src="https://i.ibb.co/s1J9Dpp/Diagrama-em-branco.png" >

## ER Diagram
<img src="https://i.ibb.co/Wx6J7P6/er.png" style="height: 400px !important;width: 400px !important;" >



## Materiais úteis
- http://br.phptherightway.com/
- https://www.php-fig.org/psr/psr-12/
- https://www.atlassian.com/continuous-delivery/software-testing/types-of-software-testing
- https://github.com/exakat/php-static-analysis-tools
- https://martinfowler.com/articles/microservices.html
- https://www.treinaweb.com.br/blog/o-que-e-laravel/
- https://medium.com/by-vinicius-reis/repository-pattern-não-precisa-ser-chato-principalmente-com-laravel-d97235b31c7e

