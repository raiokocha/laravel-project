<<<<<<< Updated upstream
<a href="https://www.buymeacoffee.com/jsafe00" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-black.png" alt="Buy Me A Coffee" style="height: 51px !important;width: 217px !important;" ></a>
=======
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
- Postman

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

## Requisições
- Collection do POSTMAN na raiz do projeto

## Materiais úteis
- http://br.phptherightway.com/
- https://www.php-fig.org/psr/psr-12/
- https://www.atlassian.com/continuous-delivery/software-testing/types-of-software-testing
- https://github.com/exakat/php-static-analysis-tools
- https://martinfowler.com/articles/microservices.html
- https://www.treinaweb.com.br/blog/o-que-e-laravel/
- https://medium.com/by-vinicius-reis/repository-pattern-não-precisa-ser-chato-principalmente-com-laravel-d97235b31c7e
>>>>>>> Stashed changes

Laravel app using service-repository pattern. You may use Postman to try the CRUD functionality. This is just for Backend only.

You can check the tutorial at https://dev.to/jsafe00/implement-crud-with-laravel-service-repository-pattern-1dkl

Create - POST - http://{localhost}/post/?title={newTitle}&description={newDescription} <br />
Read - GET (all)- http://{localhost}/post/ <br />
       GET (byID) - http://{localhost}/post/{id} <br />
Update - PATCH -  http://{localhost}/post/{id}?title={updatedTitle}&description={updatedTitle} <br />
Delete - DELETE - http://{localhost}/post/{id} <br />
                  

<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
