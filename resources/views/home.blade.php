<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Google Font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&display=swap" rel="stylesheet">

        {{-- CSS --}}
        <link rel="stylesheet" href="css/style.css">

        <title>laravel-migration-seeder</title>

    </head>
    <body>
        <main>
            <h1>laravel-migration-seeder</h1>
            <section class="debug">
                @foreach ($travels as $travel)
                    <div class="travel_dump">
                        @dump($travel->getAttributes())
                    </div>
                @endforeach 
            </section>
        </main>
    </body>
</html>
