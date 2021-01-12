<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index')->name('index');

Route::get('/trajets/{id}', 'PagesController@trajet')->name('trajets');

Route::get('/search', 'PagesController@search')->name('search');

Route::post('/listtrajet', 'PagesController@listtrajet')->name('listtrajet');

Route::get('/confirm/{code}/{id}', 'PagesController@confirm')->name('confirm');

Route::get('/resend/{code}/{id}', 'AuthController@resend_mail')->name('resend');

Route::post('/confirm/{code}/{id}', 'AuthController@postconfirm')->name('postconfirm');

Route::post('/registers', 'AuthController@register')->name('registers');

Route::post('/logins', 'AuthController@logins')->name('logins');

Route::resource('trajet', 'TrajetController');
//articles routes
Route::get('/lefret', 'PagesController@lefret')->name('lefret');
Route::get('/ccassurance', 'PagesController@ccassurance')->name('ccassurance');
Route::get('/commentemballer', 'PagesController@commentemballer')->name('commentemballer');
Route::get('/difftransport', 'PagesController@difftransport')->name('difftransport');
Route::get('/fretroutier', 'PagesController@fretroutier')->name('fretroutier');
Route::get('/isassurance', 'PagesController@isassurance')->name('isassurance');
Route::get('/marchandisedanger', 'PagesController@marchandisedanger')->name('marchandisedanger');
Route::get('/mesuretel', 'PagesController@mesuretel')->name('mesuretel');
Route::get('/topappli', 'PagesController@topappli')->name('topappli');
Route::get('/faq', 'PagesController@faq')->name('faq');
Route::get('/quisommesnous', 'PagesController@quisommesnous')->name('quisommesnous');
Route::get('/infolegal', 'PagesController@infolegal')->name('infolegal');
Route::get('/nouscontacter', 'PagesController@nouscontacter')->name('nouscontacter');
Route::get('/ccmarche', 'PagesController@ccmarche')->name('ccmarche');


Auth::routes();

Route::get("/logout", "AuthController@logout")->name("logout");

Route::get("/annonce", "PagesController@annonce")->name("annonce");

Route::get("/tchat_transporter/{trajet}", "PagesController@tchat")->name("tchat_transport");

Route::group(['middleware' => 'auth'], function(){

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/givetrajet', 'PagesController@givetrajet')->name('givetrajet');

    Route::get('/reservation', 'PagesController@reservation')->name('reservation');

    Route::get('/detailtrajet/{id_trajet}', 'PagesController@detailtrajet')->name('detailtrajet');

    Route::resource('reservation', 'ReservationController');

    Route::get('/profilparam', 'PagesController@profilparam')->name('profilparam');

    Route::get('/profilhistory', 'PagesController@profilhistory')->name('profilhistory');

    Route::get('/profilpaiement', 'ModepaiementController@index')->name('profilpaiement');

    Route::post('/profilpaiementupdate1/{id}', 'ModepaiementController@update1');

    Route::post('/profilpaiementupdate2/{id}', 'ModepaiementController@update2');

    Route::get('/profiltrajet', 'TrajetController@getMyTrajet')->name('profiltrajet');

    Route::get('/adminannonces', 'AdminPagesController@adminAnnonces')->name('adminannonces');

    Route::get('/adminreservations', 'AdminPagesController@adminReservations')->name('adminreservations');

    Route::get('/admintrajets', 'AdminPagesController@adminTrajets')->name('admintrajets');

    Route::get('/adminpaiements', 'AdminPagesController@adminPaiements')->name('adminpaiements');

    Route::get('/admincontacts', 'AdminPagesController@adminContacts')->name('admincontacts');



    Route::Resource('users', 'userController');

    Route::post('change-password', 'ChangePasswordController@store')->name('change.password');

}); 

