<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    $active = "home";
	return View::make('index')->with('active', $active);
});

Route::get('about', function()
{
    $active = "about";
	return View::make('about')->with('active', $active);
});

Route::get('facilities', function()
{
    $active = "facilities";
	return View::make('about')->with('active', $active);
});

Route::get('gallery', function()
{
    $active = "gallery";
	return View::make('gallery')->with('active', $active);
});


Route::get('achievers', function()
{
    $active = "achievers";
	return View::make('achievers')->with('active', $active);
});

Route::get('contact-us', function()
{
    $active = "contact";
	return View::make('contact')->with('active', $active);
});

Route::get('admin/page_settings', function()
{
    $active = "page_settings";
	return View::make('admin.page_settings')->with('active', $active);
});

Route::get('admin/achievers_settings', function()
{
    $active = "achievers_settings";
	return View::make('admin.achievers_settings')->with('active', $active);
});

Route::get('admin/gallery_settings', function()
{
    $active = "gallery_settings";
	return View::make('admin.gallery_settings')->with('active', $active);
});

Route::get('admin/password_management', function()
{
    $active = "password_management";
	return View::make('admin.password_management')->with('active', $active);
});


