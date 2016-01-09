## les routes

|        | GET|HEAD | cv                              | cv                | App\Http\Controllers\CvController@index
                  |            |
|        | GET|HEAD | cv/create                       | create-cv         | App\Http\Controllers\CvController@creat
e                 |            |
|        | POST     | cv/create                       | create-cv         | App\Http\Controllers\CvController@store
                  |            |
|        | POST     | cv/delete                       | delete-cv         | App\Http\Controllers\CvController@destr
oy                |            |
|        | POST     | cv/edit/{id}                    | edit-cv           | App\Http\Controllers\CvController@updat
e                 |            |
|        | GET|HEAD | cv/edit/{id}                    | edit-cv           | App\Http\Controllers\CvController@edit
                  |            |
|        | GET|HEAD | cv/etudiant/{id}                | mes-cv            | App\Http\Controllers\CvController@cvset
udiant            |            |
|        | GET|HEAD | cv/formation                    | cv-formation      | App\Http\Controllers\FormationControlle
r@index           |            |
|        | POST     | cv/formation/create             | create-formation/ | App\Http\Controllers\FormationControlle
r@store           |            |
|        | GET|HEAD | cv/formation/create             | create-cv         | App\Http\Controllers\FormationControlle
r@create          |            |
|        | POST     | cv/formation/delete             | delete-formation  | App\Http\Controllers\FormationControlle
r@destroy         |            |
|        | POST     | cv/formation/edit               | edit-formation    | App\Http\Controllers\FormationControlle
r@update          |            |
|        | GET|HEAD | cv/formation/edit/{id}          | edit-formation    | App\Http\Controllers\FormationControlle
r@edit            |            |
|        | GET|HEAD | cv/formation/etablissement/{id} | formations-etab   | App\Http\Controllers\FormationControlle
r@formationsetab  |            |
|        | GET|HEAD | cv/formation/{id}               | show-formation/   | App\Http\Controllers\FormationControlle
r@show            |            |
|        | GET|HEAD | cv/{id}                         | show-cv           | App\Http\Controllers\CvController@show
                  |            |
|        | GET|HEAD | etablissement                   | etablissement     | App\Http\Controllers\EtablissementContr
oller@index       |            |
|        | POST     | etablissement/create            | create-etab       | App\Http\Controllers\EtablissementContr
oller@store       |            |
|        | GET|HEAD | etablissement/create            | create-etab       | App\Http\Controllers\EtablissementContr
oller@create      |            |
|        | POST     | etablissement/delete            | delete-etab       | App\Http\Controllers\EtablissementContr
oller@destroy     |            |
|        | POST     | etablissement/edit              | edit-etab         | App\Http\Controllers\EtablissementContr
oller@update      |            |
|        | GET|HEAD | etablissement/edit/{id}         | edit-etab         | App\Http\Controllers\EtablissementContr
oller@edit        |            |
|        | GET|HEAD | etablissement/{id}              | show-etab         | App\Http\Controllers\EtablissementContr
oller@show        |            |
|        | GET|HEAD | etudiant                        | etudiants         | App\Http\Controllers\EtudiantController
@index            |            |
|        | POST     | etudiant/create                 | create-etudiant   | App\Http\Controllers\EtudiantController
@store            |            |
|        | GET|HEAD | etudiant/create                 | create-etudiant   | App\Http\Controllers\EtudiantController
@create           |            |
|        | POST     | etudiant/delete                 | delete-etudiant   | App\Http\Controllers\EtudiantController
@destroy          |            |
|        | POST     | etudiant/edit                   | edit-etudiant     | App\Http\Controllers\EtudiantController
@update           |            |
|        | GET|HEAD | etudiant/edit/{id}              | edit-etudiant     | App\Http\Controllers\EtudiantController
@edit             |            |
|        | GET|HEAD | etudiant/filiere/{id}           | etudiants_filiere | App\Http\Controllers\EtudiantController
@etudiantsfiliere |            |
|        | GET|HEAD | etudiant/{id}                   | show-etudiant     | App\Http\Controllers\EtudiantController
@show             |            |


## Laravel PHP Framework

[![Build Status](https://travis-ci.org/laravel/framework.svg)](https://travis-ci.org/laravel/framework)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, queueing, and caching.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
