<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

#directs to homepage
Route::get('/', 'EntryController@index')->name('entry.index');

#creates new sleep entry
Route::get('/create', 'EntryController@create') -> name('entry.create');

#process form to add sleep data
Route::post('/store', 'EntryController@store') -> name('entry.store');

#show user sleep history
Route::get('/history', 'EntryController@show') -> name('entry.show')->middleware('auth');

#shows user graphs
Route::get('/graph', 'EntryController@graph') -> name('entry.graph');

#form to edit user sleep entry
Route::get('/edit/{id}', 'EntryController@edit') -> name('entry.edit');

#process form to update user sleep entry
Route::post('/edit/{id}', 'EntryController@update') -> name('entry.update');

#form to delete user sleep data entry
Route::get('/delete/{id}', 'EntryController@delete') -> name('entry.delete');

#Test database connections
Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');

Route::get('/show-login-status', function() {  //sanitize this

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user)
        dump($user->toArray());
    else
        dump('You are not logged in.');

    return;
});
