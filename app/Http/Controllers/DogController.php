<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DogController extends Controller
{
    public function index(){
        $nombre = "Jacqueline";
        $apellido = "Kuyoc";
    return view('control.perro')
    ->with('minombre' , $nombre)
    ->with('miapellido' , $apellido);
}
}
