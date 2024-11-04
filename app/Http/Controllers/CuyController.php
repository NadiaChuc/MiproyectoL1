<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CuyController extends Controller
{
    public function index(){
        $nombre = "Nadia";
        $apellido = "Chuc";
    return view('control.cuyo')
    ->with('minombre' , $nombre)
    ->with('miapellido' , $apellido);
}
}
