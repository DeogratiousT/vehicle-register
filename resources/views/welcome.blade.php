<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>
    <body class="bg-dark text-light">
        <div class="container">
            <div class="my-4 py-4">
                <h2>OPTIMUS VEHICLE MANAGER</h2>
                <small>By: Teddius Maingi Munyao</small>
            </div>          

            <div class="jumbotron text-dark p-4">
                <p class="mb-4">
                    Optimus Vehicle Manager is Laravel Apllication with a GRAPHQL API that enables users to register/login/logout into/from the system and register/update their vehicles in it. It uses Laravel Sanctum for authentication and management of access tokens. 
                </p>
                <p class="mb-4">
                    Get to interact with the system from the <a href="https://optimus-vehicles.herokuapp.com/graphql-playground" class="btn btn-success">GRAPHQL PLAYGROUND</a>
                </p>
                <p>
                    The api endpoint can be access from <a href="https://optimus-vehicles.herokuapp.com/graphql">here</a>  
                    
                </p> 
            </div>
        </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
