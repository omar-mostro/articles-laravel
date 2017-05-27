<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showAbout()
    {

        $data = array(
            'name' => "Omar",
            'apellidos' => "Sánchez Martínez"
        );

        return view('page.about', $data);

        //$name = "omar Sánchez";
        //return view('page.about')->with('name', $name);

    }
}

