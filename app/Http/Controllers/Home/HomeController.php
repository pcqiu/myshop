<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;

class HomeController extends Controller
{
    public function index()
    {
//        dd(Admin::user()->avatar);
        dump('welcome');
    }
}