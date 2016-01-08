


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


Route::resource('cv', 'CvController');
Route::resource('formation', 'FormationController') ;
Route::resource('etablissement', 'EtablissementController') ;
Route::resource('competence', 'CompetenceController') ;

	/******           nawal           *******/

Route::resource('experience', 'ExperienceController') ;
Route::resource('loisir', 'LoisirController') ;
Route::resource('langue', 'LangueController') ;
// Route::group(array('prefix' => 'cv'), function()
// {
// 	Route::resource('formation', 'FormationController') ;
// 	Route::resource('etablissement', 'EtablissementController') ;
// 	Route::resource('competence', 'CompetenceController') ;

// 	/******           nawal           *******/

// 	Route::resource('experience', 'ExperienceController') ;
// 	Route::resource('loisir', 'LoisirController') ;
// 	Route::resource('langue', 'LangueController') ;

// });



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
