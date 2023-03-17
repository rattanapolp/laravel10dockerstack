<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- bootstrape css -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body class="bg-success" >
        <div class="container-fluid text-end bg-dark">
            @if (Route::has('login'))
                <div >
                    @auth
                        <a href="{{ url('/home') }}" class="">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif            
        </div>

        <div>
            <h1>Home Page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit molestiae aliquid consequatur eius vel, ea veritatis quaerat illo nobis animi sunt aut aspernatur dolor placeat voluptas quae ex expedita dolores amet neque dignissimos! Ad tenetur hic nobis facilis eaque aut dicta sit? Ipsa neque eum sequi odit quasi harum provident explicabo commodi, tempora nulla iste consectetur corrupti autem ad! Enim, eveniet. Suscipit distinctio a itaque, aspernatur quaerat dolorem eos nemo tempore, eum vitae magni odit! Maiores, reiciendis praesentium doloremque voluptate vitae officiis labore impedit ducimus sapiente, saepe officia vel! Autem quisquam laudantium facere eum enim similique praesentium nobis iusto voluptas!</p>
        </div>
         <div>
            <h2>edit from fixed bug team</h2>
            <p>this area edit with fixbug team</p>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
</html>
