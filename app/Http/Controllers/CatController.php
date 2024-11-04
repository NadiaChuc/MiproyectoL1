<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index(){
        $nombre = "Nadia Jacqueline";
        $apellido = "Chuc Kuyoc";
    return view('control.gato')
    ->with('minombre' , $nombre)
    ->with('miapellido' , $apellido);
}
}
