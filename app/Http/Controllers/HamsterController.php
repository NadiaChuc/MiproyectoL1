<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HamsterController extends Controller
{
    public function index(){
        $nombre = "Nadia Jacqueline";
        $apellido = "Chuc Kuyoc";
    return view('control.hamster')
    ->with('minombre' , $nombre)
    ->with('miapellido' , $apellido);
}
}
