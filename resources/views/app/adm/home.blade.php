<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite([
                'resources/css/app.css', 
                'resources/css/adm.css', // Adicionando o arquivo adicional              
                'resources/js/app.js', 
                ])
        @endif

       

    </head>
    <body >
       
        
      adm

        
       
    </body>
</html>
