<?php 
Route::get('Medical-Marijuana-News', 'HomeController@index');
Route::get('contact-us', 'HomeController@index');
Route::get('faq', 'HomeController@index');
Route::get('Illinois-Medical-Marijuana-Information', 'HomeController@index');
Route::get('Medical-Marijuana-Strain-Guide', 'HomeController@index');
Route::get('Shop-420-Windy-City', 'HomeController@index');
Route::get('420-Windy-City-Medical-Marijuana-Blog', 'BlogFrontController@index');

ROUTE::get('420-Windy-City-Medical-Marijuana-Blog/{slug}',function($slug)
{

    $slug = DB::table('tb_blogs')->where('slug', $slug)->first();
	return View::make('blogs.view')->with('slug',$slug);

});


ROUTE::get('Medical-Marijuana-Strain-Guide/{slug}',function($slug)
{

	return View::make('strains.view')->with('slug',$slug);

});



ROUTE::get('420-Windy-City-Medical-Marijuana-Blog/{category}',function($slug)
{

    $slug = DB::table('tb_blogs')->where('slug', $slug)->first();
	return View::make('blogs.view')->with('slug',$slug);

});

?>