<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/create.css') }}">

    <title>Creer apprenant</title>
</head>
<body>
    <section id="section">
        <div class="container">
            <h1>Ajouter apprenant</h1>
            <div>
                <form action="{{route('apprenants.store')}}" method="post">
                    @csrf
                
                        <input type="text" id="name" name="name" placeholder="Prénom">
                        <input type="text" id="name" name="lastname" placeholder="Nom">
                        <input type="text" id="name" name="email" placeholder="Email" >
                        <input type="hidden" name="promotion_id"  value='{{$promotion_id}}' >
                    <button>Ajouter</button>

                </form>
            </div>
        </div>
    </div>


</body>
</html>
