
## Les urls formalisés

+--------+-----------+------------------------------------+----------------------+
Method    | URI                   | nom                  	| Action
+--------+-----------+------------------------------------+----------------------+

POST      | /competence           | competence.store     	| 

GET       | /competence           | competence.index     	| 

GET       | /competence/create    | competence.create    	| 

PUT		  | /competence/{id}      | competence.update      	| 

DELETE    | /competence/{id}      | competence.destroy    	| 

GET 	  | /competence/{id}      | competence.show       	| 

POST      | /cv                   | cv.store              	| 

GET		  | /cv                   | cv.index              	| 

GET       | /cv/create            | cv.create             	| 

PUT|PATCH | /cv/{id}              | cv.update             	| 

GET|HEAD  | /cv/{id}              | cv.show               	| 
/
DELETE    | /cv/{cv}              | cv.destroy            | 

GET|HEAD  | /cv/{cv}/edit         | cv.edit               | 

POST      | /etablissement        | etablissement.store   | 

GET		  | /etablissement        		| etablissement.index   | 

GET		  | /etablissement/create 		| etablissement.create  | 

PUT|PATCH | /etablissement/{id}   		| etablissement.update  | 

GET|HEAD  | /etablissement/{id}   		| etablissement.show    | 

DELETE    | /etablissement/{id}    		| etablissement.destroy | 

GET|HEAD  | /etablissement/{id}/edit 	| etablissement.edit    | 

POST      | /experience                 | experience.store      | 

GET|HEAD  | /experience                 | experience.index      | 

GET|HEAD  | /experience/create          | experience.create     | 

DELETE    | /experience/{id}            | experience.destroy    | 

GET|HEAD  | /experience/{id}            | experience.show       | 

PUT|PATCH | /experience/{id}            | experience.update     | 

GET|HEAD  | /experience/{id}/edit       | experience.edit       | 

POST      | /formation                  | formation.store       | 

GET|HEAD  | /formation                  | formation.index       |

GET|HEAD  | /formation/create           | formation.create      |

DELETE    | /formation/{id}             | formation.destroy    | 

PUT|PATCH | /formation/{id}             | formation.update      | 

GET|HEAD  | /formation/{id}             | formation.show        | 

GET|HEAD  | /formation/{id}/edit        | formation.edit        |

GET|HEAD  | /langue                     | langue.index          | 

POST      | /langue                     | langue.store          | 

GET|HEAD  | /langue/create              | langue.create         | 

GET|HEAD  | /langue/{langue}            | langue.show           | 

PUT|PATCH | langue/{langue}             | langue.update         | 

DELETE    | langue/{langue}             | langue.destroy        | 

GET|HEAD  | langue/{langue}/edit        | langue.edit           | 

GET|HEAD  | /loisir                     | loisir.index          | 

POST      | /loisir                     | loisir.store          | 

GET|HEAD  | /loisir/{loisir}            | loisir.show           | 

PUT|PATCH | /loisir/{loisir}            | loisir.update         | 

DELETE    | /loisir/{loisir}            | loisir.destroy        | 

GET|HEAD  | loisir/{loisir}/edit        | loisir.edit           | 
+--------+-----------+------------------------------------+----------------------+
<!-- ## les routes

	Method		   	URL		     							Action
									
   	GET			   	/cv           							Liste des cv
   
   	GET		 		/cv/{id}            					Recupere le cv de l'id {id}
 
 	GET   			/cv/create      						Pour obtenir le formulaire de création d'un cv

	POST     		/cv/create     							Pour créer un cv 

	POST     		/cv/delete      						Pour supprimer un cv

	POST     		/cv/edit 								Pour modifier un cv

	GET				/cv/edit/{id}   						Pour obtenir le formulaire de modification d'un cv

	GET				/cv/etudiant/{id}   					liste des cvs d'un etudiant

	GET|HEAD 		/cv/formation        					listes des formations d'un cv

	POST    	    /cv/formation/create 					créer une formation pour un cv

	GET				/cv/formation/create 					obtenir le formulaire de création d'une formation

	POST  			/cv/formation/delete 					delete-formation

	POST     		/cv/formation/edit 						edit-formation  

	GET				/cv/formation/edit/{id} 				edit-formation  

	GET				/cv/formation/etablissement/{id} 		formations-etablissement

	GET				/cv/formation/{id}               		show-formation/  

	GET				/etablissement                   		etablissement  

	POST    		/etablissement/create 					create-etab 

	GET|HEAD 		/etablissement/create            		create-etab 

	POST     		/etablissement/delete        			delete-etab 

	POST     		/etablissement/edit 					edit-etab 

	GET|HEAD		/etablissement/edit/{id}         		edit-etab 

	GET|HEAD 		/etablissement/{id}              		show-etab

	GET|HEAD 		/etudiant                        		liste des etudiants     

	POST   			/etudiant/create                 		formulaire de création d'un etudiant

	GET				/etudiant/create                    	create-etudiant 

	POST     		/etudiant/delete  						delete-etudiant 

	POST    		/etudiant/edit          				edit-etudiant 

	GET 			/etudiant/edit/{id}              		formulaire de modification d'un etudiant

	GET				/etudiant/filiere/{id}           		listes des étudiants d'une filière 

	GET			 	/etudiant/{id}                   		Obténir un étudiant 
 -->
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
