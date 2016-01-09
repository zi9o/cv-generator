
## Les urls formalisés


	Method      	  	URI     					   Nom          				Action

	POST         		/cv                     	   cv.store  

	GET|HEAD		    /cv                      	   cv.index     

	GET|HEAD          	/cv/create               	   cv.create             	

	PUT|PATH			/cv/{id}                	   cv.update          	   

	GET|HEAD  	     	/cv/{id}                 	   cv.show             
	
	DELETE       		/cv/{cv}                       cv.destroy               

	GET|HEAD  			/cv/{cv}/edit           	   cv.edit                  
	
	POST         		/etablissement           	   etablissement.store      

	GET|HEAD		    /etablissement        		   etablissement.index      

	GET|HEAD		    /etablissement/create 		   etablissement.create     

	PUT|PATH           	/etablissement/{id}   		   etablissement.update     

	GET|HEAD          	/etablissement/{id}   		   etablissement.show       

	DELETE       		/etablissement/{id}    		   etablissement.destroy    

	GET|HEAD          	/etablissement/{id}/edit 	   etablissement.edit       

	POST         		/formation                     formation.store          

	GET|HEAD          	/formation                     formation.index         

	GET|HEAD          	/formation/create              formation.create        

	DELETE       		/formation/{id}                formation.destroy       

	PUT|PATH           	/formation/{id}                formation.update         

	GET|HEAD          	/formation/{id}                formation.show           

	GET|HEAD          	/formation/{id}/edit           formation.edit          

	POST         	    /competence              	   competence.store 

	GET|HEAD          	/competence                    competence.index   

	GET|HEAD          	/competence/create             competence.create 

	PUT|PATH		    /competence/{id}               competence.update      	 

	DELETE       		/competence/{id}        	   competence.destroy      

	GET|HEAD 	    	/competence/{id}        	   competence.show  

	POST         		/experience                    experience.store         

	GET|HEAD          	/experience                    experience.index         

	GET|HEAD          	/experience/create             experience.create        

	DELETE       		/experience/{id}               experience.destroy       

	GET|HEAD          	/experience/{id}               experience.show          

	PUT|PATH           	/experience/{id}               experience.update        

	GET|HEAD          	/experience/{id}/edit          experience.edit          

	GET|HEAD          	/langue                        langue.index             

	POST         		/langue                        langue.store             

	GET|HEAD          	/langue/create                 langue.create            

	GET|HEAD          	/langue/{langue}               langue.show              

	PUT|PATH           	langue/{langue}                langue.update            

	DELETE       		/langue/{langue}               langue.destroy           

	GET|HEAD          	langue/{langue}/edit           langue.edit              

	GET|HEAD          	/loisir                        loisir.index             

	POST         		/loisir                        loisir.store             

	GET|HEAD          	/loisir/{loisir}               loisir.show              

	PUT|PATH           	/loisir/{loisir}               loisir.update            

	DELETE       		/loisir/{loisir}               loisir.destroy           

	GET|HEAD          	/loisir/{loisir}/edit          loisir.edit              

## les routes


 GET|HEAD    api/etudiant                                         api.etudiant..index                     App\Http\Controllers\EtudiantController@index

 POST        api/etudiant                                         api.etudiant..store                     App\Http\Controllers\EtudiantController@store

 GET|HEAD    api/etudiant/create                                  api.etudiant..create                    App\Http\Controllers\EtudiantController@create

 POST        api/etudiant/cv                                      api.etudiant.cv..store                  App\Http\Controllers\CvController@store

 GET|HEAD    api/etudiant/cv                                      api.etudiant.cv..index                  App\Http\Controllers\CvController@index

 POST        api/etudiant/cv/competence                           api.etudiant.cv.competence.store        App\Http\Controllers\CompetenceController@store

 GET|HEAD    api/etudiant/cv/competence                           api.etudiant.cv.competence.index        App\Http\Controllers\CompetenceController@index

 GET|HEAD    api/etudiant/cv/competence/create                    api.etudiant.cv.competence.create       App\Http\Controllers\CompetenceController@create

 DELETE      api/etudiant/cv/competence/{competence}              api.etudiant.cv.competence.destroy      App\Http\Controllers\CompetenceController@destroy

 PUT|PATCH   api/etudiant/cv/competence/{competence}              api.etudiant.cv.competence.update       App\Http\Controllers\CompetenceController@update

 GET|HEAD    api/etudiant/cv/competence/{competence}              api.etudiant.cv.competence.show         App\Http\Controllers\CompetenceController@show

 GET|HEAD    api/etudiant/cv/competence/{competence}/edit         api.etudiant.cv.competence.edit         App\Http\Controllers\CompetenceController@edit

 GET|HEAD    api/etudiant/cv/create                               api.etudiant.cv..create                 App\Http\Controllers\CvController@create

 POST        api/etudiant/cv/etablissement                        api.etudiant.cv.etablissement.store     App\Http\Controllers\EtablissementController@store

 GET|HEAD    api/etudiant/cv/etablissement                        api.etudiant.cv.etablissement.index     App\Http\Controllers\EtablissementController@index

 GET|HEAD    api/etudiant/cv/etablissement/create                 api.etudiant.cv.etablissement.create    App\Http\Controllers\EtablissementController@create

 GET|HEAD    api/etudiant/cv/etablissement/{etablissement}        api.etudiant.cv.etablissement.show      App\Http\Controllers\EtablissementController@show

 PUT|PATCH   api/etudiant/cv/etablissement/{etablissement}        api.etudiant.cv.etablissement.update    App\Http\Controllers\EtablissementController@update

 DELETE      api/etudiant/cv/etablissement/{etablissement}        api.etudiant.cv.etablissement.destroy   App\Http\Controllers\EtablissementController@destroy

 GET|HEAD    api/etudiant/cv/etablissement/{etablissement}/edit   api.etudiant.cv.etablissement.edit      App\Http\Controllers\EtablissementController@edit

 GET|HEAD    api/etudiant/cv/experience                           api.etudiant.cv.experience.index        App\Http\Controllers\ExperienceController@index

 POST        api/etudiant/cv/experience                           api.etudiant.cv.experience.store        App\Http\Controllers\ExperienceController@store

 GET|HEAD    api/etudiant/cv/experience/create                    api.etudiant.cv.experience.create       App\Http\Controllers\ExperienceController@create

 PUT|PATCH   api/etudiant/cv/experience/{experience}              api.etudiant.cv.experience.update       App\Http\Controllers\ExperienceController@update

 DELETE      api/etudiant/cv/experience/{experience}              api.etudiant.cv.experience.destroy      App\Http\Controllers\ExperienceController@destroy

 GET|HEAD    api/etudiant/cv/experience/{experience}              api.etudiant.cv.experience.show         App\Http\Controllers\ExperienceController@show

 GET|HEAD    api/etudiant/cv/experience/{experience}/edit         api.etudiant.cv.experience.edit         App\Http\Controllers\ExperienceController@edit

 GET|HEAD    api/etudiant/cv/formation                            api.etudiant.cv.formation.index         App\Http\Controllers\FormationController@index

 POST        api/etudiant/cv/formation                            api.etudiant.cv.formation.store         App\Http\Controllers\FormationController@store

 GET|HEAD    api/etudiant/cv/formation/create                     api.etudiant.cv.formation.create        App\Http\Controllers\FormationController@create

 GET|HEAD    api/etudiant/cv/formation/{formation}                api.etudiant.cv.formation.show          App\Http\Controllers\FormationController@show

 PUT|PATCH   api/etudiant/cv/formation/{formation}                api.etudiant.cv.formation.update        App\Http\Controllers\FormationController@update

 DELETE      api/etudiant/cv/formation/{formation}                api.etudiant.cv.formation.destroy       App\Http\Controllers\FormationController@destroy

 GET|HEAD    api/etudiant/cv/formation/{formation}/edit           api.etudiant.cv.formation.edit          App\Http\Controllers\FormationController@edit

 POST        api/etudiant/cv/langue                               api.etudiant.cv.langue.store            App\Http\Controllers\LangueController@store

 GET|HEAD    api/etudiant/cv/langue                               api.etudiant.cv.langue.index            App\Http\Controllers\LangueController@index

 GET|HEAD    api/etudiant/cv/langue/create                        api.etudiant.cv.langue.create           App\Http\Controllers\LangueController@create

 DELETE      api/etudiant/cv/langue/{langue}                      api.etudiant.cv.langue.destroy          App\Http\Controllers\LangueController@destroy

 PUT|PATCH   api/etudiant/cv/langue/{langue}                      api.etudiant.cv.langue.update           App\Http\Controllers\LangueController@update

 GET|HEAD    api/etudiant/cv/langue/{langue}                      api.etudiant.cv.langue.show             App\Http\Controllers\LangueController@show

 GET|HEAD    api/etudiant/cv/langue/{langue}/edit                 api.etudiant.cv.langue.edit             App\Http\Controllers\LangueController@edit


 POST        api/etudiant/cv/loisir                               api.etudiant.cv.loisir.store            App\Http\Controllers\LoisirController@store

 GET|HEAD    api/etudiant/cv/loisir                               api.etudiant.cv.loisir.index            App\Http\Controllers\LoisirController@index

 GET|HEAD    api/etudiant/cv/loisir/create                        api.etudiant.cv.loisir.create           App\Http\Controllers\LoisirController@create

 DELETE      api/etudiant/cv/loisir/{loisir}                      api.etudiant.cv.loisir.destroy          App\Http\Controllers\LoisirController@destroy

 PUT|PATCH   api/etudiant/cv/loisir/{loisir}                      api.etudiant.cv.loisir.update           App\Http\Controllers\LoisirController@update

 GET|HEAD    api/etudiant/cv/loisir/{loisir}                      api.etudiant.cv.loisir.show             App\Http\Controllers\LoisirController@show

 GET|HEAD    api/etudiant/cv/loisir/{loisir}/edit                 api.etudiant.cv.loisir.edit             App\Http\Controllers\LoisirController@edit

 PUT|PATCH   api/etudiant/cv/{}                                   api.etudiant.cv..update                 App\Http\Controllers\CvController@update

 DELETE      api/etudiant/cv/{}                                   api.etudiant.cv..destroy                App\Http\Controllers\CvController@destroy

 GET|HEAD    api/etudiant/cv/{}                                   api.etudiant.cv..show                   App\Http\Controllers\CvController@show

 GET|HEAD    api/etudiant/cv/{}/edit                              api.etudiant.cv..edit                   App\Http\Controllers\CvController@edit

 DELETE      api/etudiant/{}                                      api.etudiant..destroy                   App\Http\Controllers\EtudiantController@destroy

 PUT|PATCH   api/etudiant/{}                                      api.etudiant..update                    App\Http\Controllers\EtudiantController@update

 GET|HEAD    api/etudiant/{}                                      api.etudiant..show                      App\Http\Controllers\EtudiantController@show
 
 GET|HEAD    api/etudiant/{}/edit                                 api.etudiant..edit                      App\Http\Controllers\EtudiantController@edit

<!-- ## les routes

	Method		   	URL		     							Action
									
   	GET|HEAD			   	/cv           							Liste des cv
   
   	GET|HEAD		 		/cv/{id}            					Recupere le cv de l'id {id}
 
 	GET|HEAD   			/cv/create      						Pour obtenir le formulaire de création d'un cv

	POST     		/cv/create     							Pour créer un cv 

	POST     		/cv/delete      						Pour supprimer un cv

	POST     		/cv/edit 								Pour modifier un cv

	GET|HEAD				/cv/edit/{id}   						Pour obtenir le formulaire de modification d'un cv

	GET|HEAD				/cv/etudiant/{id}   					liste des cvs d'un etudiant

	GET|HEAD      		/cv/formation        					listes des formations d'un cv

	POST    	    /cv/formation/create 					créer une formation pour un cv

	GET|HEAD				/cv/formation/create 					obtenir le formulaire de création d'une formation

	POST  			/cv/formation/delete 					delete-formation

	POST     		/cv/formation/edit 						edit-formation  

	GET|HEAD				/cv/formation/edit/{id} 				edit-formation  

	GET|HEAD				/cv/formation/etablissement/{id} 		formations-etablissement

	GET|HEAD				/cv/formation/{id}               		show-formation/  

	GET|HEAD				/etablissement                   		etablissement  

	POST    		/etablissement/create 					create-etab 

	GET|HEAD      		/etablissement/create            		create-etab 

	POST     		/etablissement/delete        			delete-etab 

	POST     		/etablissement/edit 					edit-etab 

	GET|HEAD     		/etablissement/edit/{id}         		edit-etab 

	GET|HEAD      		/etablissement/{id}              		show-etab

	GET|HEAD      		/etudiant                        		liste des etudiants     

	POST   			/etudiant/create                 		formulaire de création d'un etudiant

	GET|HEAD				/etudiant/create                    	create-etudiant 

	POST     		/etudiant/delete  						delete-etudiant 

	POST    		/etudiant/edit          				edit-etudiant 

	GET|HEAD 			/etudiant/edit/{id}              		formulaire de modification d'un etudiant

	GET|HEAD				/etudiant/filiere/{id}           		listes des étudiants d'une filière 

	GET|HEAD			 	/etudiant/{id}                   		Obténir un étudiant 
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
