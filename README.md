#Install (Laravel)

install via composer

composer require aden551/dd
Add Service Provider to config/app.php in providers section

Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class,
Add a route in your web routes file:

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Go to http://myapp/logs or some other route
