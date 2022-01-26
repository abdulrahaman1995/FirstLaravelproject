<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
   
    public function about()
    {
        $title = "About Us page from controller";
        $body = "This is my about us page";
        return view ('pages.about', compact('title','body'));
        //return $title;
    }

    public function users($id)
    
    {
        $name = "Abdulrahman adekeye - ". $id;
        return view('pages.users', compact('name'));
    }
}
