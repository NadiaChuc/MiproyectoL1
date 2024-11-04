<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Caveat&display=swap" rel="stylesheet">
    <style>
        .titulo{ font-family: 'Caveat'; font-weight: 50px; }
        .contenido { font-family: "Caveat"; src: url("fuentes/Caveat-Regular.ttf") format("truetype"); }
    </style>
    </head>
    <body>
        <header >Cabecera desde componentes</header>

       Inicia-View <br>
       {{$slot}}   <br>
       Termina-View  <br>
 
    <footer>Pié de página desde componentes</footer> 
    </body>
</html>