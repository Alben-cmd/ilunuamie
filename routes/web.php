<?php

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

// Route::get('/', function () {
//     return view('pages.home')-;
// });

// Route::get('home', function () {
//     return view('index');
// });

use Illuminate\Support\Facades\Route;

Route::post('/contact_us', 'ContactController@saveContact')->name('contact_us');
Route::get('/', 'PagesController@home')->name('home');
Route::get('/sabi_news', 'PagesController@news')->name('sabi_news');
Route::get('/sabi_news/{id}', 'PagesController@show')->name('single.news');
Route::get('faqs', 'PagesController@faqs')->name('faqs');
Route::get('try', 'PagesController@try')->name('try');


Route::get('courses/sanef', 'PagesController@sanefGroup')->name('courses.sanef');
Route::get('courses/cflt', 'PagesController@cfltGroup')->name('courses.cflt');
Route::get('courses/basicFinLit', 'PagesController@basicFinGroup')->name('courses.basicFin');


// Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'ContactController@myCaptchaPost')->name('myCaptcha.post');
Route::get('/refresh_captcha', 'ContactController@refreshCaptcha')->name('refresh_captcha');
Route::get('/blog', 'PagesController@blog')->name('blog');
Route::get('/terms_of_use', 'PagesController@terms_of_use')->name('terms_of_use');
Route::get('/e_naira', 'PagesController@e_naira')->name('e_naira');
Route::get('/fraud_scam', 'PagesController@fraud_scam')->name('fraud_scam');
Route::get('/rights_responsiblities', 'PagesController@rights_responsiblities')->name('rights_responsiblities');
Route::get('/global_week/{id}', 'PagesController@global_week')->name('global_week');
Route::get('/grassroot_leveraging', 'PagesController@grassroot_leveraging')->name('grassroot_leveraging');

// About courses...
Route::get('/about_cflt', 'PagesController@about_cflt')->name('about_cflt');
Route::get('/about_sanef', 'PagesController@about_sanef')->name('about_sanef');
Route::get('/about_napgep', 'PagesController@about_napgep')->name('about_napgep');

// About News
Auth::routes();
Route::get('news/news_one', 'PagesController@news_one')->name('news_one');

Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::get('create', 'NewsController@create')->name('news.create');
    Route::post('store', 'NewsController@store')->name('news.store');
    Route::get('edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::get('show/{id}', 'NewsController@show')->name('news.show');
    Route::post('update/{id}', 'NewsController@update')->name('news.update');
    Route::get('unpublish/{id}', 'NewsController@unpublish')->name('news.unpublish');
    Route::get('publish/{id}', 'NewsController@publish')->name('news.publish');
    Route::get('unpublished', 'NewsController@unpublished')->name('news.unpublished');
    Route::delete('delete/{id}', 'NewsController@destroy')->name('news.delete');
});