
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        @vite('resources/js/app.js')
    </head>
    <body>
        <h1 class="text-center">Le mie fatture</h1>
        <div class="container text-center py-2">
            <a class="btn btn-primary" href="/invoices">show the invoices</a>
        </div>
        {{-- <img src="{{ Vite::asset('resources/img/picsum30.jpg') }}" alt=""> --}}
    </body>
</html>
