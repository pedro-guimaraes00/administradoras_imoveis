<html>
    <head>
        <title>Corretora de Imóveis</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            @component('navbar', ["current" => $current])
            @endcomponent
                <main role="main">
                    @hasSection ('body')
                        @yield('body')
                    @endif
                </main>
        </div> 
        
    <script src="{{ asset("js/app.js") }}" type="text/javascript"></script> 
    </body>
</html>