<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('products');
    }
    public function home(){
        return view('welcome');
    }
    public function adminPannel(){
        $data = User::get();
        return view('admin.admin')->with(compact('data'));
    }
}
