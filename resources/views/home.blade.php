<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- importare i file css --}}
    <link rel="stylesheet" href="  {{ asset('css/app.css')  }} ">
    <title>Home</title>
</head>
<body>

    <h2 class="text-primary">Home</h2>

    @forelse ($movies as $movie)
    <div>
        <div class="col card">
            <div class="card-body">
                <h5 class="card-title"> {{ $movie -> title  }}</h5>

            </div>
        </div>
    </div>        
    @empty

    <p> tabella vuota </p>
        
    @endforelse

    {{-- import javascript --}}
    <script src=" {{ asset('js/app.js')  }} "></script>
    
</body>
</html>