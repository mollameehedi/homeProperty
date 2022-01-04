<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'FrontendController@index')->name('index');
Route::get('about', 'FrontendController@about')->name('about');
Route::get('gallery', 'FrontendController@gallery')->name('gallery');
Route::get('location', 'FrontendController@location')->name('location');
Route::post('schedule/post', 'FrontendController@schedulepost')->name('schedulepost');
Route::post('subscriber/post', 'FrontendController@subscriberpost')->name('subscriberpost');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('edit/profile', 'HomeController@editprofile')->name('editprofile');
Route::post('change/name', 'HomeController@changename')->name('changename');
Route::post('change/photo', 'HomeController@changephoto')->name('changephoto');
Route::post('change/password', 'HomeController@changepassword')->name('changepassword');
Route::get('home/logo', 'HomeController@homelogo')->name('homelogo');
Route::get('home/logo/update/{id}', 'HomeController@homelogoupdate')->name('homelogoupdate');
Route::post('home/logo/update/post/{id}', 'HomeController@homelogoupdatepost')->name('homelogoupdatepost');
Route::get('home/visitor/schedule', 'HomeController@visitorschedule')->name('visitorschedule');
Route::post('home/visitor/schedule/delete/{id}', 'HomeController@visitorscheduledelete')->name('visitorscheduledelete');
Route::get('home/subscriber', 'HomeController@subscriber')->name('subscriber');
Route::post('home/subscriber/delete/{id}', 'HomeController@subscriberdelete')->name('subscriberdelete');


//HomebannerController
Route::resource('home/banner', 'HomebannerController');

//YoutubelinkController
Route::resource('home/youtube/link', 'YoutubelinkController');
Route::get('home/youtube/link/heading/update/{id}', 'YoutubelinkController@youtubelinkheadingupdate')->name('youtubelinkheadingupdate');
Route::post('home/youtube/link/heading/update/post/{id}', 'YoutubelinkController@youtubelinkheadingupdatepost')->name('youtubelinkheadingupdatepost');

//WorkingserviceController
Route::resource('home/working/service', 'WorkingserviceController');
Route::get('home/working/service/heading/update/{id}', 'WorkingserviceController@workingserviceheadingupdate')->name('workingserviceheadingupdate');
Route::post('home/working/service/heading/update/post/{id}', 'WorkingserviceController@workingserviceheadingupdatepost')->name('workingserviceheadingupdatepost');




//GallaryController
Route::resource('home/gallery', 'GallaryController');
Route::get('home/gallery/heading/update/{id}', 'GallaryController@galleryheadingupdate')->name('galleryheadingupdate');
Route::post('home/gallery/heading/update/post/{id}', 'GallaryController@galleryheadingupdatepost')->name('galleryheadingupdatepost');
//TestimonialController
Route::resource('home/testimonial', 'TestimonialController');
Route::get('home/testimonial/heading/update/{id}', 'TestimonialController@testimonialheadingupdate')->name('testimonialheadingupdate');
Route::post('home/testimonial/heading/update/post/{id}', 'TestimonialController@testimonialheadingupdatepost')->name('testimonialheadingupdatepost');




//AboutController
Route::get('home/about/detail', 'AboutController@aboutdetail')->name('aboutdetail');
Route::get('home/about/detail/update/{id}', 'AboutController@aboutdetailupdate')->name('aboutdetailupdate');
Route::post('home/about/detail/update/post/{id}', 'AboutController@aboutdetailupdatepost')->name('aboutdetailupdatepost');
Route::get('home/house/detail', 'AboutController@housedetail')->name('housedetail');
Route::get('home/house/detail/update/{id}', 'AboutController@housedetailupdate')->name('housedetailupdate');
Route::post('home/house/detail/update/post/{id}', 'AboutController@housedetailupdatepost')->name('housedetailupdatepost');



//SocialController
Route::resource('home/social', 'SocialController');


//InfoController
Route::resource('home/info', 'InfoController');

//OpeninghoureController
Route::resource('home/opening/hour', 'OpeninghoureController');

// layout route  start
Route::get('home/layout', 'LayoutController@index')->name('layout.index');
Route::post('home/store', 'LayoutController@store')->name('layout.store');
Route::get('home/show', 'LayoutController@show')->name('layout.show');
Route::get('home/delete/{id}', 'LayoutController@delete')->name('layout.delete');
Route::get('home/update', 'LayoutController@update')->name('layout.update');
