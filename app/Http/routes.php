


<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



// Route::group(array('prefix' => 'cv'), function()
// {
// 	// routes pour les cvs
// 	Route::get('create', [
// 		'uses' => 'CvController@create',
// 		'as' => 'create-cv'
// 	]);

// 	Route::post('create', [
// 		'uses' => 'CvController@store',
// 		'as' => 'create-cv'
// 	]);
	
// 	Route::get('edit/{id}', [
// 		'uses' => 'CvController@edit',
// 		'as' => 'edit-cv'
// 	])->where('id', '[0-9]+');

// 	Route::post('edit/{id}', [
// 		'uses' => 'CvController@update',
// 		'as' => 'edit-cv'
// 	])->where('id', '[0-9]+');
	
// 	Route::post('delete', [
// 		'uses' => 'CvController@destroy',
// 		'as' => 'delete-cv'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('/', [
// 		'uses' => 'CvController@index',
// 		'as' => 'cv'
// 	]);

// 	Route::get('/{id}', [
// 		'uses' => 'CvController@show',
// 		'as' => 'show-cv'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('/etudiant/{id}', [
// 		'uses' => 'CvController@cvsetudiant',
// 		'as' => 'mes-cv'
// 	])->where('id', '[0-9]+');


// 	// routes pour les formations
// 	Route::get('formation/create', [
// 		'uses' => 'FormationController@create',
// 		'as' => 'create-cv'
// 	]);

// 	Route::post('formation/create', [
// 		'uses' => 'FormationController@store',
// 		'as' => 'create-formation/'
// 	]);
	
// 	Route::get('formation/edit/{id}', [
// 		'uses' => 'FormationController@edit',
// 		'as' => 'edit-formation'
// 	])->where('id', '[0-9]+');

// 	Route::post('formation/edit', [
// 		'uses' => 'FormationController@update',
// 		'as' => 'edit-formation'
// 	])->where('id', '[0-9]+');
	
// 	Route::post('formation/delete', [
// 		'uses' => 'FormationController@destroy',
// 		'as' => 'delete-formation'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('formation', [
// 		'uses' => 'FormationController@index',
// 		'as' => 'cv-formation'
// 	]);

// 	Route::get('formation/{id}', [
// 		'uses' => 'FormationController@show',
// 		'as' => 'show-formation/'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('formation/etablissement/{id}', [
// 		'uses' => 'FormationController@formationsetab',
// 		'as' => 'formations-etab'
// 	])->where('id', '[0-9]+');

// });


// Route::group(array('prefix' => 'etudiant'), function()
// {
// 	// routes pour les cvs
// 	Route::get('create', [
// 		'uses' => 'EtudiantController@create',
// 		'as' => 'create-etudiant'
// 	]);

// 	Route::post('create', [
// 		'uses' => 'EtudiantController@store',
// 		'as' => 'create-etudiant'
// 	]);
	
// 	Route::get('edit/{id}', [
// 		'uses' => 'EtudiantController@edit',
// 		'as' => 'edit-etudiant'
// 	])->where('id', '[0-9]+');

// 	Route::post('edit', [
// 		'uses' => 'EtudiantController@update',
// 		'as' => 'edit-etudiant'
// 	])->where('id', '[0-9]+');
	
// 	Route::post('delete', [
// 		'uses' => 'EtudiantController@destroy',
// 		'as' => 'delete-etudiant'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('/', [
// 		'uses' => 'EtudiantController@index',
// 		'as' => 'etudiants'
// 	]);

// 	Route::get('/{id}', [
// 		'uses' => 'EtudiantController@show',
// 		'as' => 'show-etudiant'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('/filiere/{id}', [
// 		'uses' => 'EtudiantController@etudiantsfiliere',
// 		'as' => 'etudiants_filiere'
// 	])->where('id', '[0-9]+');

// });


// Route::group(array('prefix' => 'etablissement'), function()
// {
// 	// routes pour les cvs
// 	Route::get('create', [
// 		'uses' => 'EtablissementController@create',
// 		'as' => 'create-etab'
// 	]);

// 	Route::post('create', [
// 		'uses' => 'EtablissementController@store',
// 		'as' => 'create-etab'
// 	]);
	
// 	Route::get('edit/{id}', [
// 		'uses' => 'EtablissementController@edit',
// 		'as' => 'edit-etab'
// 	])->where('id', '[0-9]+');

// 	Route::post('edit', [
// 		'uses' => 'EtablissementController@update',
// 		'as' => 'edit-etab'
// 	])->where('id', '[0-9]+');
	
// 	Route::post('delete', [
// 		'uses' => 'EtablissementController@destroy',
// 		'as' => 'delete-etab'
// 	])->where('id', '[0-9]+');
	
// 	Route::get('/', [
// 		'uses' => 'EtablissementController@index',
// 		'as' => 'etablissement'
// 	]);

// 	Route::get('/{id}', [
// 		'uses' => 'EtablissementController@show',
// 		'as' => 'show-etab'
// 	])->where('id', '[0-9]+');
// });



Route::resource('cv', 'CvController');
Route::resource('formation', 'FormationController') ;
Route::resource('etablissement', 'EtablissementController') ;
Route::resource('competence', 'CompetenceController') ;

	/******           nawal           *******/

Route::resource('experience', 'ExperienceController') ;
Route::resource('loisir', 'LoisirController') ;
Route::resource('langue', 'LangueController') ;


// Route::get('auth/login', [
// 	'uses' => 'Auth\AuthController@getLogin',
// 	'as' => 'login'
// ]);
// Route::post('auth/login',[
// 	'uses' => 'Auth\AuthController@postLogin',
// 	'as' => 'login'
// ]);

// Route::get('auth/login', [
// 	'uses' => 'Auth\AuthController@getLogout',
// 	'as' => 'logout'
// ]);

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// // Home
// Route::get('/', [
// 	'uses' => 'etudiantCvController@index', 
// 	'as' => 'home'
// ]);

// Route::get('/register', [
// 	'uses' => 'HomeController@register', 
// 	'as' => 'register'
// ]);

// Route::get('/login', [
// 	'uses' => 'HomeController@index', 
// 	'as' => 'login'
// ]);

// Route::get('/cv',  [
// 	'uses' => 'etudiantCvController@index',
// 	'as' => 'index'
// ]);

// Route::get('/cv/{id}',  [
// 	'uses' => 'etudiantCvController@index',
// 	'as' => 'index'
// ])->where('id', '[0-9]+');

// Route::get('/{id}',  [
// 	'uses' => 'etudiantCvController@show',
// 	'as' => 'edit'
// ])->where('id', '[0-9]+');


// // Admin
// Route::get('admin', [
// 	'uses' => 'AdminCvController@admin',
// 	'as' => 'admin',
// 	'middleware' => 'admin'
// ]);

// Route::get('edit/{id}', [
// 	'uses' => 'etudiantCvController@edit',
// 	'as' => 'edit'
// ])->where('id', '[0-9]+');

// Route::post('edit/{id}', [
// 	'uses' => 'etudiantCvController@update',
// 	'as' => 'edit'
// ])->where('id', '[0-9]+');


// Route::get('create', [
// 	'uses' => 'etudiantCvController@create',
// 	'as' => 'create'
// ]);

// Route::get('show', [
// 	'uses' => 'etudiantCvController@show',
// 	'as' => 'show'
// ]);
// Route::get('view', [
// 	'uses' => 'etudiantCvController@view',
// 	'as' => 'view'
// ]);

// Route::post('create', [
// 	'uses' => 'etudiantCvController@store',
// 	'as' => 'store'
// ]);

// Route::get('help', [
// 	'uses' => 'etudiantCvController@help',
// 	'as' => 'help'
// ]);


// Route::get('/', function () {
//     return view('welcome');
// });


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
