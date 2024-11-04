  {{-- <table border="1">
    <tr>
        <td colspan="2">
            imagen
        </td>
    </tr>
    <tr>
        <td>
            <ul>
                <li><a href="/nadia">Inicio</a></li>
                <li><a href="/perros">Perros</a></li>
                <li><a href="/gatos">Gatos</a></li>
                <li><a href="/cuyos">Cuyos</a></li>
                <li><a href="/hamsters">Hamsters</a></li>
            </ul>
        </td>
        <td>
            Estos son los perritos que tenemos disponibles
        </td>
    </tr>
</table> --}}

{{--  <html>
    <head>
        <title> Perros </title>
    <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
	    <h1> Estos son los perritos que tenemos: </h1> <br>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://tvazteca.brightspotcdn.com/2a/32/1199875c4f87afc979322f4f412a/la-mirada-de-los-perritos-es-irresistible.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://www.ladogmami.com/wp-content/uploads/2021/03/19.-Feb-Desde-que-edad-es-recomendable-adoptar-perritos-bebes-1024x683.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://images.squarespace-cdn.com/content/v1/57a2aeb1ff7c509ef76566c9/1580174975544-U5MTHMIVJKK6G8XBALLQ/laula-co-pdKPFBysSfA-unsplash.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://vsd.mx/wp-content/uploads/2024/09/Canciones-dedicadas-a-perritos.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://palabrasclaras.mx/wp-content/uploads/2022/08/PERRO.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://wallpapers.com/images/featured/razas-de-perros-wtsiyypwuinpbxub.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://images.unsplash.com/photo-1422565096762-bdb997a56a84?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mnx8fGVufDB8fHx8fA%3D%3D" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://static.vecteezy.com/system/resources/previews/032/566/717/non_2x/wallpaper-the-grass-dog-puppy-the-sun-the-grass-the-grass-the-ai-generated-free-photo.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://wallpapers.com/images/hd/golden-retriever-cute-puppy-desktop-2sl9lpmvgx4wawbw.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://wallpaper.forfun.com/fetch/cf/cfcbaba54056ef5f4990e0e4a1947dbc.jpeg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://static.vecteezy.com/system/resources/previews/031/853/357/non_2x/wallpaper-the-dog-puppy-forest-the-dog-puppy-the-forest-the-dog-ai-generated-free-photo.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://png.pngtree.com/background/20230528/original/pngtree-pitbull-dog-wallpaper-cute-puppies-picture-image_2778699.jpg" alt="">
    </div>
    </div>

    </body>
</html> --}}

{{--  <html>
    <head>
        <title> Perros </title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
            <style>
                .titulo{ font-family: 'Caveat'; font-weight: 50px; }
                .contenido { font-family: "Caveat"; src: url("fuentes/Caveat-Regular.ttf") format("truetype"); }
            </style>
    </head>
    <body>
	    <h1 class="contenido"> Estos son los perritos que tenemos: </h1> 
        <h1 class="titulo"> Estos son los perritos </h1>

    </body>
</html> --}}

@extends('layouts.app')  

{{-- @section('title','Esta es una APP') --}}

@section('title')
Perros
@endsection 

@section('content')  
     <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
            <style>
                .titulo{ font-family: 'Caveat'; font-weight: 50px; }
                .contenido { font-family: "Caveat"; src: url("fuentes/Caveat-Regular.ttf") format("truetype"); }
            </style>
    </head>
    <body><br>
	    <h1 class="contenido"> hola estoy desde la segunda forma de layouts en PERROS</h1> 
    </body>
@endsection