<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
    </head>
    <body class="bg-black">
        <h1 class="text-red-500 text-2xl text-center font-bold h-20">PRACTICA Nro5</h1>
        <div class=" text-white shadow-2xl text-center  ">
            <ol class="flex flex-nowrap gap-4 justify-center">
                <li><a href="fibonacci" class="bg-green-500 px-2 py-2 rounded">fibonacci</a></li>
                <li><a href="palabras" class="bg-green-500 px-2 py-2 rounded">Calculo de palabras</a></li>
                <li><a href="vocales" class="bg-green-500 px-2 py-2 rounded">Calculo de Vocales en una cadena</a></li>
                <li> <a href="perfecto" class="bg-green-500 px-2 py-2 rounded">Verifica si un numero es perfecto</a></li>  
            </ol>
        </div>
        
        
       
        

    </body>
</html>
