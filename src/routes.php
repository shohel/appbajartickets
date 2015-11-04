<?php

Route::group(['middleware' => 'auth'], function () use ($main_route) {
	//Ticket public route
	get("$main_route/complete", 'Mhshohel\Appbajarticket\Controllers\TicketsController@indexComplete')
		->name("$main_route-complete");
	get("$main_route/data/{id?}", 'Mhshohel\Appbajarticket\Controllers\TicketsController@data')
		->name("$main_route.data");
	resource($main_route, 'Mhshohel\Appbajarticket\Controllers\TicketsController');

	//Ticket Comments public route
	resource("$main_route-comment", 'Mhshohel\Appbajarticket\Controllers\CommentsController');

	//Ticket complete route for permitted user.
	get("$main_route/{id}/complete", 'Mhshohel\Appbajarticket\Controllers\TicketsController@complete')
		->name("$main_route.complete");

	//Ticket reopen route for permitted user.
	get("$main_route/{id}/reopen", 'Mhshohel\Appbajarticket\Controllers\TicketsController@reopen')
		->name("$main_route.reopen");
});

Route::group(['middleware' => 'Mhshohel\Appbajarticket\Middleware\IsAgentMiddleware'], function () use ($main_route) {

	//API return list of agents in particular category
	get("$main_route/agents/list/{category_id?}/{ticket_id?}", [
		'as' => $main_route . 'agentselectlist',
		'uses' => 'Mhshohel\Appbajarticket\Controllers\TicketsController@agentSelectList',
	]);
});

Route::group(['middleware' => 'Mhshohel\Appbajarticket\Middleware\IsAdminMiddleware'], function () use ($admin_route) {
	//Ticket admin index route (ex. http://url/tickets-admin/)
	get("$admin_route/indicator/{indicator_period?}", [
			'as' => 'dashboard.indicator',
			'uses' => 'Mhshohel\Appbajarticket\Controllers\AdminController@index'
	]);
	get($admin_route, 'Mhshohel\Appbajarticket\Controllers\AdminController@index');

	//Ticket statuses admin routes (ex. http://url/tickets-admin/status)
	resource("$admin_route/status", 'Mhshohel\Appbajarticket\Controllers\StatusesController');

	//Ticket priorities admin routes (ex. http://url/tickets-admin/priority)
	resource("$admin_route/priority", 'Mhshohel\Appbajarticket\Controllers\PrioritiesController');

	//Agents management routes (ex. http://url/tickets-admin/agent)
	resource("$admin_route/agent", 'Mhshohel\Appbajarticket\Controllers\AgentsController');

	//Agents management routes (ex. http://url/tickets-admin/agent)
	resource("$admin_route/category", 'Mhshohel\Appbajarticket\Controllers\CategoriesController');

	//Settings configuration routes (ex. http://url/tickets-admin/configuration)
	resource("$admin_route/configuration", 'Mhshohel\Appbajarticket\Controllers\ConfigurationsController');

	//Tickets demo data route (ex. http://url/tickets-admin/demo-seeds/)
	// get("$admin_route/demo-seeds", 'Mhshohel\Appbajarticket\Controllers\InstallController@demoDataSeeder');
});
