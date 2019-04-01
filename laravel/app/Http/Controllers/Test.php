<?php
/**
 * Created by PhpStorm.
 * User: broth
 * Date: 2019/3/31
 * Time: 22:22
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class Test extends Controller
{
    public function db()
    {

        $res = session()->all();
        dd($res);
    }
}