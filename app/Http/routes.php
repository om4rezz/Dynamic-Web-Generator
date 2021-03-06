<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');

Route::post('/message','MessageController@store')->name('message.store');;
// The user is logged in...
Route::group(['middleware' => 'auth'], function () {


	// Route::get('/dashboard', function () {
 //    	return view('DashboardIndex');
	// });

	// Route::get('/home', 'MessageController@dashboard');
	Route::get('/dashboard','MessageController@dashboard');

	// Route::get('/dashboard','DashboardController@index');

	
	Route::get('/user/edit/{user}','UserController@edit');
	Route::patch('/user/update/{user}','UserController@update');
	Route::resource('/user','UserController');

	Route::get('/news_promotion/{t}', 'NewsPromotionController@index')->name('news_promotion.index');
	Route::get('/news_promotion/create/{t}', 'NewsPromotionController@create')->name('news_promotion.create');
	Route::resource('/news_promotion','NewsPromotionController',['except' => ['create', 'index']]);
	Route::resource('/aboutus','AboutUsController',['except' => ['index']]); 
	Route::post('/menu/updateall','MenuController@updateAll');
	Route::resource('/menu','MenuController');
	Route::resource('/page','PagesController');
	Route::resource('/crusal','CrusalController');  

	Route::get('/service/delete/{service}','ServiceController@delete');
	Route::get('/service/edit/{service}','ServiceController@edit');
	Route::patch('/service/update/{service}','ServiceController@update');
	Route::resource('/service','ServiceController'); 
    Route::get('/activetemp/{id}','SiteController@activetemp');

	Route::get('/site/edit/{site}','SiteController@edit');
	Route::patch('/site/update/{site}','SiteController@update');
    Route::resource('/site','SiteController'); 
	Route::get('/branding/edit/{header}','BrandingController@edit'); 
	Route::patch('/branding/{header}','BrandingController@update');
	Route::get('/branding/delete/{header}','BrandingController@delete');
    Route::resource('/branding','BrandingController');    
	Route::resource('/stylecontainer','StyleContainerController');
	Route::resource('/category','CategoryController');
	Route::resource('/subcategory','SubCategoryController');
	Route::resource('/product','ProductController');
	Route::resource('/contactus','ContactUsController');
	Route::resource('/footer','FooterController');
	Route::resource('/numberview','NumberViewController');
	Route::patch('/domain/update/{domain}','DomainController@update');
	Route::get('/domain/edit/{domain}','DomainController@edit');
	Route::get('/domain/reseller_index','DomainController@reseller_index');
	Route::get('/domain/resellershow/{id}','DomainController@resellershow');
	Route::get('/domain/solve_resellerindex/{id}','DomainController@solve_resellerindex');
	Route::get('/domain/solve_resellershow/{id}','DomainController@solve_resellershow');
	Route::resource('/domain','DomainController');
	Route::resource('/googlemap','GoogleMapController');

	Route::resource('/template','TemplateController');
	Route::get('/message/unseen','MessageController@unseen');
	Route::resource('/message','MessageController', ['except' => ['store']]);

	Route::get('/reseller/{user}/edit','ResellerController@edit');
	Route::patch('/reseller/{user}','ResellerController@update');

	Route::get('/gotosite','TemplateController@gotosite');

	Route::resource('/reseller', 'ResellerController', ['only' => [
    'index', 'show' , 'create' , 'store', 'update',
	]]);

	Route::resource('/reseller', 'ResellerController', ['except' => [
    	'create' , 'destroy',
	]]);
	Route::get('/ban/{user}','ResellerController@ban');
	Route::get('/reseller/createsiteforuser/{user}','ResellerController@createsiteforuser');
	Route::get('/ticket/reseller_index','TicketController@reseller_index');
	Route::get('/ticket/resellershow/{id}','TicketController@resellershow');

	Route::get('/ticket/solve_resellerindex/{id}','TicketController@solve_resellerindex');
	Route::get('/ticket/solve_resellershow/{id}','TicketController@solve_resellershow');
	Route::get('/ticket/solve_index/{id}','TicketController@solve_index');
	Route::get('/ticket/solve_show/{id}','TicketController@solve_show');
	Route::get('/ticket/destroy/{id}','TicketController@destroy');

	// Route::post('/ticket/commentstore','TicketController@commentstore');
	Route::resource('/ticket','TicketController');

	Route::resource('/comment','CommentController');


	// for send to email 
	// Route::get('/email','CommentController@email');


// for route make any ajax processing in project
	if (Request::ajax()){
		Route::get('/product/create/{id}','ProductController@ajaxcreate');
		Route::get('/googlemap/storelocation/{XYlocation}','GoogleMapController@ajaxstore');

		Route::get('/crusal/is_exit/{title}','CrusalController@ajaxexite_crusal');
		Route::get('/category/is_exit/{title}','CategoryController@ajaxexite_category');
		Route::get('/subcategory/is_exit/{title}','SubCategoryController@ajaxexite_subcategory');
		Route::get('/product/is_exit/{title}','ProductController@exiteajax_product');
		Route::get('/service/is_exit/{title}','ServiceController@ajaxexite_service');
		Route::get('/page/is_exit/{title}','PagesController@ajaxexite_page');
		Route::get('/menu/is_exit/{title}','MenuController@ajaxexite_menu');
		Route::get('/news_promotion/is_exit/{type}/{title}','MenuController@ajaxexite_news_promotion');
		Route::get('/ticket/is_exit/{title}','TicketController@ajaxexite_ticket');
		Route::get('/domain/is_exit/{title}','TicketController@ajaxexite_domain');
	}



	
	// Route::get('/subcategory/destroy/{id}','SubCategoryController@destroy');
	// Route::get('/product/destroy/{id}','ProductController@destroy');	
	
});

//***************************for generator new project*******************************



// Route::get('/webgenerator/{subdomain}/{temp_id}/show_en', function () {
//     	return view('temp1/show_en');
// });

// ***************** for make route of webgenerator


// Route::get('/webgenerator/{subdomain}/{temp_id}/show_en','TemplateController@Show');


Route::get('/{subdomain}/en','TemplateController@Show');
Route::get('/{subdomain}/ar','TemplateController@Show');

Route::get('/{subdomain}/{static_page}/en','TemplateController@static_page');
Route::get('/{subdomain}/{static_page}/ar','TemplateController@static_page');




// Route::get('/{subdomain}/{locale}','TemplateController@Show');


