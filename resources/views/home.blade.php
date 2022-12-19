<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>

    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-3 p-4">
                    <div class="card movie text-center py-5">
                        <h1 class="py-3">{{$movie['title']}}</h1>
                        <p class="py-3">{{$movie['date']}}</p>
                        <p class="py-3">{{$movie['vote']}}</p>
                    </div>
                </div>   
            @endforeach
        </div>
    </div>


</body>
</html>