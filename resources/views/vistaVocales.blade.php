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
            Cuántas vocales hay en una cadena de caracteres
        </h1>
        <form action="{{ route('obtenerVocales') }}" method="post">
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
        @isset($vocales)
            <section>
                El numero de vocales que hay en la cadena es: {{ $vocales }}
            </section>
        @endisset
    </section>
</body>

</html>