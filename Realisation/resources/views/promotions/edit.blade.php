<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/editPro.css') }}">
    <title>Document</title>
</head>
<body>
<section id="section">
    <div class="container">

        <h1>Gérer une promotion</h1>
        <nav>
            <form action="{{route('promotions.update',['promotion' => $promotion->id])}}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Modifier le nom de promotion:</label>
                <input type="text" class="name" name="name" value="{{$promotion->name}}" >

                <button class="btn-edit">Modifer</button>
            </form>
        </nav>
        <nav class="search">
            <ul>
                <li><input type="text" id="search" placeholder="chercher apprenant..."></li>        
                <li><a href="{{route('apprenants.create',$promotion['id'])}}">ajouter apprenant</a></li>
            </ul>
        </nav>
      

        
        <div class="scrollbar">
            <table id="promotions">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Adresse email</th>
                        <th>Fonctions</th>

                    </tr>
                </thead>
                <tbody id="table1" class="table1">
                        @foreach($apprenants as $apprenant)
                    <tr>
                        <td scope="row" class="id">{{$apprenant['id']}}</td>
                        <td class="id">{{$apprenant['name']}}</td>
                        <td class="id">{{$apprenant['lastname']}}</td>
                        <td class="id">{{$apprenant['email']}}</td>
                        <input type="hidden"  name="promotion_id" value="{{$apprenant->promotion_id}}" id="idp" >

                        <td class="functions">
                            <ul class="ul">
                                <li>
                                    <a href="{{route('apprenants.edit',$apprenant['id'])}}">Modifier</a>
                                </li>
                                <li>
                                    <form action="{{route('apprenants.destroy',$apprenant->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                        <input  type="submit" value="Supprimer" class="delete" />
                                    </form>
                                </li>
                               
                            </ul>
                          
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                    
                    
            </table>
        </div>     
    </div>     

</section>


</body>
</html>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">
    $idpromo=$('#idp').val();
        $('#search').on('keyup',function(){
            $value=$(this).val();
            $.ajax({
                type:'get',
                url:'{{URL::to("searchstudent")}}',
                data:{'search':$value,
                    'PromotionID':$idpromo},
                success:function(data){
                    console.log(data);
                    $('#table1').html(data);
                }
            });
        })
        </script>
