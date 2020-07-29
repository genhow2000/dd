# Install (Laravel)

install via composer
```diff
composer require aden551/dd
```
run migrate
```diff
php artisan migrate --path=vendor/aden551/dd/database/migrations
```
add it in your controller

```diff
use Aden\Tool\Dd;
```
# Function
```diff
!Dd(array/string $log1,log2,log3)
description：
parameter：
return：
```

# Example
```diff
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Aden\Tool\Dd;

class TestController extends Controller
{
    public function test(Request $request)
    {
        $array = 'test';
        
        //單純記錄參數不停止CODE運行
        dd::log($array);
        //靜態記錄你的array && DD SHOW IT
        dd::dd($array);

    }

}

```


