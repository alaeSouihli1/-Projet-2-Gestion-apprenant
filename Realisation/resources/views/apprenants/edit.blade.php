<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/create.css') }}">

    <title>Document</title>
</head>
<body>
    <section id="section">
        <div class="container">
            <h1>Modifier apprenant</h1>
            <nav>
                <form action="{{route('apprenants.update',[$apprenant->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                  
                        <label for="name">Prénom:</label>
                        <input type="text"  name="name" value="{{$apprenant->name}}" >
                        <label for="name">Nom:</label>
                       <input type="text"  name="lastname" value="{{$apprenant->lastname}}" >
                       <label for="name">Adresse email:</label>
                       <input type="text"  name="email" value="{{$apprenant->email}}" >
                        <input type="hidden" name="promotion_id"  value='{{$apprenant->promotion_id}}' >

                  
                

                    <button>Modifier</button>
                </form>
            </nav>
        </div>
    </div>

</body>
</html>
