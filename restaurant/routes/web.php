<?php
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('create',function (){
   return view('category.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin','AdminController@index')->name('admin.dashboard');
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');

//Resource Controllers
Route::resource('category','CategoryController');
Route::resource('dish','DishController');
Route::resource('table','TableController');
Route::resource('booking', 'BookingController');
Route::resource('gallery','GalleryController');
//Route::resource('items','ItemsController');
Route::resource('items','ItemController');
Route::resource('chef','ChefController');
Route::resource('about','AboutController');
Route::resource('slider','SliderController');

//Frontend Controller
Route::get('/','Frontend\FrontendController@index')->name('frontend.index');
Route::get('about-us','Frontend\FrontendController@about')->name('frontend.about-us');
Route::get('galleries','Frontend\FrontendController@gallery')->name('frontend.gallery');
Route::get('menu-grid','Frontend\FrontendController@menu')->name('frontend.menu-grid');
Route::get('table','Frontend\FrontendController@table')->name('frontend.table');
Route::get('contact','Frontend\FrontendController@contact')->name('frontend.contact');
Route::get('chefs','Frontend\FrontendController@chef')->name('frontend.chef');


Route::post('/reservation','Frontend\ReservationController@reserve')->name('reservation.reserve');

Route::get('reservation', 'ReservationController@index')->name('reservation.index');
Route::post('reservation/{id}', 'ReservationController@status')->name('reservation.status');
Route::delete('reservation/{id}','ReservationController@destroy')->name('reservation.destroy');

Route::post('/contacts','Frontend\ContactController@sendMessage')->name('contact.send');

Route::get('contacts','ContactController@index')->name('contact.index');
Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');


