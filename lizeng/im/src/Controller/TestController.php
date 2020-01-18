<?php
/**
 * Created by PhpStorm.
 * User: ASUS
 * Date: 2020/1/17
 * Time: 17:48
 */

namespace Lizeng\Im\Controller;

use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function hello($name)
    {
        $package_name = config('lizeng.test','null');
        return view('lizeng::test', compact('name','package_name'));
    }

    public function world($name)
    {
        echo 'HelloWorldController world ' . $name;
    }
}