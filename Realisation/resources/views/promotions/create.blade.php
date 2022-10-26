<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/create.css') }}">

    <title>Ajouter promotion</title>
</head>
<body>
<section id="section">
    <div class="container">
        <h1>Ajouter une promotion</h1>
        <div>
            <form action="{{route('promotions.store')}}" method="post">
                @csrf
                <!-- <label for="name">Nom</label> -->
                <input type="text" id="name" name="name" placeholder="Ajouter promotion">
                <button>Ajouter</button>
            </form>
        </div>
    </div>
</section>



</body>
</html>
