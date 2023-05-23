<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite('resources/css/app.css')
</head>

<body>
    <section class="container mx-auto bg-slate-200">
        <h1 class="text-3xl text-center font-bold underline">
            Numero de palabras de una cadena
        </h1>
        <form action="{{ route('obtenerPalabras') }}" method="post">
            @csrf
            <input type="text" name="cadena" required>
            @error('cadena')
                <div>
                    {{ $message }}
                </div>
            @enderror
            <button type="submit" class="bg-green-200 px-1 py-1 rounded">
                Calcular
            </button>
        </form>
        @isset($numeroPalabras)
            <section>
                El número de palabras de una cadena: {{ $numeroPalabras }}
            </section>
        @endisset
    </section>
</body>

</html>