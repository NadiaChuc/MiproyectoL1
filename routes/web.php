<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\CuyController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HamsterController;
use Illuminate\Support\Facades\Route;
use App\Models\Computer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nadia', function () {
    return view('miprimeravista');
});

Route::get('/perros', function () {
    return view('perritos');
});

Route::get('/gatos', function () {
    return view('gatitos');
});

Route::get('/cuyos', function () {
    return view('loscuyos');
});

Route::get('/hamsters', function () {
    return view('loshamsters');
});

Route::get('/miprimeraplantilla', function () {
    return view('primeraforma');
});

Route::get('/misegundaplantilla', function () {
    return view('segundaforma');
});

Route::get('/gatocontrolador', [CatController::class, 'index']);
Route::get('/perrocontrolador', [DogController::class, 'index']);
Route::get('/cuyocontrolador', [CuyController::class, 'index']);
Route::get('/hamstercontrolador', [HamsterController::class, 'index']);

Route::get('/insertar', function () {
    $computer = Computer::find(1);

    //EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
    //return $computer->published_at->format('d-m-Y');
    //EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
    return $computer->published_at->diffForHumans();
    //insertar valores 
    /*$computer = new Computer;
    $computer->model='Victus gamer';
    $computer->mark='Hp';
    $computer->published_at='2024-10-27 13:11:00';
    $computer->is_active=true;
    $computer->size=15;
    $computer->save();
    return $computer;
    */
    //SE ACCEDE AL VALOR DE published_at
    $computer = Computer::find(1);
    return $computer->published_at;
    //buscar registros 
    /*$computer = Computer::find(1);
    return $computer;
    */
    //seleccionar con where 
    /*$computer = Computer::where('model','Aspire v3')->first();
    return $computer;
    */
    //seleccionar con where y save 
    /*$computer = Computer::where('model','Pavilion')->first();
    $computer->model ='Pavilion12';
    $computer->save();
    return $computer;
    */
    //despliegue con multiples registros
    /*$computer = Computer::all();
    return $computer;
    */
    //desplegar una parte
    /*$computer = Computer::where('id','>=',2)->get();
    return $computer;
    */
    //desplegar una parte y ordenar 
    /*$computer = Computer::where('id','>=',2)->orderBy('id','desc')->get();
    return $computer;
    */
    //desplegar una parte, ordenar y algunas columnas 
    /*$computer = Computer::where('id','>=',2)
						    ->select('id','model')
						    ->orderBy('id','desc')
						    ->get();
    return $computer;
    */
    //eliminar registros
    /*$computer = Computer::find(3);
    $computer->delete();
    */
});