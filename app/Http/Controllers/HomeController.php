<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        /*$data = [
            'name' => 'muhamad yuki',
            'pekerjaan' => 'programmer'
        ];
        return view('home')->with($data);*/

        $name = 'Muhamad Yuki';
        $pekerjaan = 'Programmer';
        return view('home', compact('name', 'pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
