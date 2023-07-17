<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion; 

class PublicacionController extends Controller
{
   
    public function index()
    {
        $publicaciones = Publicacion::all();
        return view('home', compact('publicaciones'));
    }
    
}

