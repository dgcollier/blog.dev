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

// GET
// HOME
Route::get('/', 'HomeController@showHome');

// ABOUT
Route::get('/about', 'HomeController@showAbout');

// SEARCH
Route::get('/search', 'HomeController@showSearch');

// CONTACT
Route::get('/contact', 'HomeController@showContact');

// RESUME
Route::get('/resume', 'HomeController@showResume');

// PORTFOLIO
Route::get('/portfolio', 'HomeController@showPortfolio');

// SAY HELLO
Route::get('/sayhello/{name?}', 'HomeController@sayHello');

// ROLLDICE
Route::get('/rolldice/{userGuess?}', 'HomeController@showRolldice');


// RESOURCE
// POST
Route::resource('/posts', 'PostsController');

// Route::get('orm-test', function ()
// {
//     // test code here
//     $post1 = new Post();
// 	$post1->title = 'Post One';
// 	$post1->sub_title  = 'Post one\'s subtitle';
// 	$post1->author = 'Mark Twain';
// 	$post1->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
// 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
// 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
// 	$post1->save();

// 	$post2 = new Post();
// 	$post2->title = 'Post Two';
// 	$post2->sub_title  = 'Post two\'s subtitle';
// 	$post2->author = 'Charles Dickens';
// 	$post2->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
// 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
// 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
// 	$post2->save();

// 	$post3 = new Post();
// 	$post3->title = 'Post Three';
// 	$post3->sub_title  = 'Post three\'s subtitle';
// 	$post3->author = 'Elizabeth Cady Stanton';
// 	$post3->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
// 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
// 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
// 	$post3->save();

// 	$post4 = new Post();
// 	$post4->title = 'Post Four';
// 	$post4->sub_title  = 'Post four\'s subtitle';
// 	$post4->author = 'John Locke';
// 	$post4->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
// 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
// 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
// 	$post4->save();

// 	$post5 = new Post();
// 	$post5->title = 'Post Five';
// 	$post5->sub_title  = 'Post five\'s subtitle';
// 	$post5->author = 'Jane Austen';
// 	$post5->body = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
// 		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
// 		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
// 		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
// 		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
// 		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
// 	$post5->save();
// });