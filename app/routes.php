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
//    Mail::send('emails.contact', array('message' => 'testing almawrid'), function($message)
//    {
//        $message->to('alabamustapha@gmail.com', 'Testing almawrid')->subject('Weelcome');
//    });

    $active = "contact";
	return View::make('contact')->with('active', $active);
});


Route::post('contact-us', function()
{
    $sender_name = Input::get('name');
    $sender_email = Input::get('email');
    $message_body = Input::get('message');
    $data = array(
        'message_body'=>$message_body,
        'sender_email'=>$sender_email,
        'sender_name'=>$sender_name
    );

    Mail::send('emails.contact', $data, function($message) use ($sender_name, $sender_email)
    {
        $message->from($sender_email, $sender_name);
        $message->to('alabamustapha@gmail.com', 'Almawrids Schools')->subject('Contact us page');
        $message->replyTo($sender_email, $sender_name);
    });

    return Redirect::to('contact-us')->with('message', "we will get back to you shortly");
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

Route::get('admission_form', function(){

    $file = public_path() . "/admission/admission_form.pdf";
    if (File::isFile($file))
    {
        $file = File::get($file);
        $response = Response::make($file, 200);
        // using this will allow you to do some checks on it (if pdf/docx/doc/xls/xlsx)
        $response->header('Content-Type', 'application/pdf');
        return $response;
    }

    return Response::download($file);
});