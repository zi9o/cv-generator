


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


Route::group (['prefix' =>  'api'], function ()
{
	Route::resource('etudiant', 'Api\EtudiantController');
	Route::group(['prefix' =>  'etudiant'], function (){
		Route::resource('cv', 'Api\CvController');
		Route::get('filiere/{id}', [
			'uses' => 'Api\EtudiantController@etudiantsfiliere',
			'as' => 'filiere.etudiants'
		])->where('id', '[0-9]+');
		Route::group (['prefix' =>  'cv'], function ()
		{
			// Route::get('/etudiant/{id}', 'CvController@');
			// Route::get('/', 'CvController');
			Route::resource('formation', 'Api\FormationController') ;
			Route::resource('etablissement', 'Api\EtablissementController') ;
			Route::resource('competence', 'Api\CompetenceController') ;

				/******           nawal           *******/

			Route::resource('experience', 'Api\ExperienceController') ;
			Route::resource('loisir', 'Api\LoisirController') ;
			Route::resource('langue', 'Api\LangueController') ;
		});
	});
});



Route::get('login', [
	'uses' => 'Auth\AuthController@getLogin',
	'as' => 'login'
]);
Route::post('login',[
	'uses' => 'Auth\AuthController@postLogin',
	'as' => 'login'
]);

Route::get('auth/logout', [
	'uses' => 'Auth\AuthController@getLogout',
	'as' => 'logout'
]);

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password', 'Auth\PasswordController@getEmail');
Route::post('password', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');
// Home

Route::get('/home', [
	'uses' => 'homeController@index', 
	'as' => 'home'
]);
Route::get('/', [
	'uses' => 'homeController@home', 
	'as' => 'accueil'
]);

// etudiant

Route::get('etudiant',  [
	'uses' => 'etudiantController@index',
	'as' => 'etudiant'
]);

Route::get('etudiant/cv/create',  [
	'uses' => 'etudiantController@create',
	'as' => 'etudiant.cv.create'
]);
Route::get('etudiant/cv',  [
	'uses' => 'etudiantController@getCvs',
	'as' => 'etudiant.cv'
]);

Route::get('etudiant/cv/{id}',  [
	'uses' => 'etudiantController@getCv',
	'as' => 'index'
])->where('id', '[0-9]+');

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
