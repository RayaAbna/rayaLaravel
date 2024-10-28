<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
        return view('index');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
    }
    public function login(){
        return view('login');// ini menuju ke halaman welcome.blade.php di folder recourcer/view
    }
    public function about(){
        $data = [
            'name'     => 'Raya Abna Ariffandhi',
            'adrees'   => 'Purwokerto',
            'gmail'    => 'rayaabna5@gmail.com'
        ];

        return view('about', $data);// ini menuju ke halaman welcome.blade.php di folder recourcer/view
    }
}
