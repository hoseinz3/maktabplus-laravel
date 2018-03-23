<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {

        $names = [
            ['firstName' => 'hosein' , 'lastName' => 'abedi'],
            ['firstName' => 'mahdi' ,'lastName' => 'kazemi'],
            ['firstName' => 'ali' , 'lastName' => 'mohammadi']
        ];
        return view('welcome', compact('names'));
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }
}
