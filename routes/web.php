<?php

// use Illuminate\Support\Facades\Route;

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

Route::middleware('localization')->namespace('App\\Http\\Controllers')->group(function () {

    Route::middleware('guest')->group(function () {

        Route::get('/', 'GuestController@index')->name('home');

        // Route of the log in
        Route::get('/login', 'Auth\AuthenticatedSessionController@create')->name('login');
        Route::post('/login', 'Auth\AuthenticatedSessionController@store')->name('login');

        // Route of the logout
        Route::get('/register', 'Auth\RegisteredUserController@create')->name('register');
        Route::post('/register', 'Auth\RegisteredUserController@store')->name('register');
    });

    // We can use this route if we are authenticate or guest for define localization langue
    Route::post('/change-localization', 'ManagerController@changeLocalization')->name('change-localization');

    Route::get('/', 'ManagerController@landing')->name('front.index');

    Route::get('/contact', 'ManagerController@contact')->name('front.contact');

    Route::post('/add_message', 'ManagerController@addMessage')->name('front.add_message');

    Route::get('/community', 'ManagerController@community')->name('front.community');

    //
    Route::middleware('auth')->group(function () {

        // Post home page route
        Route::get('/home', 'Posts\ManagerController@index')->name('home');

        // User space route
        Route::get('/posts/my_space', 'Users\UserController@mySpace')->name('user.my_space');
        Route::get('/posts/myspace/{post_id}/show', 'Users\UserController@showMyPost')->name('user.post.show');

        // Settings user route
        Route::get('/user/settings', 'Users\ManagerController@settingsIndex')->name('user.settings.index');
        Route::post('/user/make_info', 'Users\SettingController@makeInfos')->name('user.make-infos');
        Route::get('/user/show_credentials', 'Users\ManagerController@showCredentials')->name('user.show_credentials');
        Route::post('/user/make_credentials', 'Users\SettingController@makeCredentials')->name('user.make-credentials');

        // Route of the posts
        Route::post('/post/store', 'Posts\PostController@addPost')->name('post.store');
        Route::get('/post/{post_id}/show', 'Posts\PostController@showPost')->name('post.show');
        Route::post('/post/{post_id}/update', 'Posts\PostController@modifyPost')->name('post.update');
        Route::post('/post/{post_id}/delete', 'Posts\PostController@deletePost')->name('post.delete');

        // Route of the comments
        Route::post('/comment/{post_id}/store', 'Posts\CommentController@addComment')->name('comment.add');
        Route::post('/comment/{post_id}/update', 'Posts\CommentController@modifyComment')->name('comment.update');
        Route::post('/comment/{comment_id}/delete', 'Posts\CommentController@deleteComment')->name('comment.delete');

        // Route of notification
        Route::get('/notifications', 'ManagerController@notifications')->name('notifications');

        // Session logout route
        Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')
            ->name('logout');
    });
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('/pages.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__ . '/auth.php';
