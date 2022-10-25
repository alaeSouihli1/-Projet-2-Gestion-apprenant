 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>Gestion des apprenants</title>
 </head>
 <body>
    <!-- <h1>Solicode</h1> -->
    <div class="container">
        <div class="container-2">
            <h1>Liste des promotions</h1>
            <div class="search">
                <input type="text" id="search" placeholder="Chercher promotion">
            </div>
    
            <a href="{{route('promotions.create')}}">Create promotion</a>

            <table id="promotions">
                <thead >
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>fonctions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($promotions as $promotion)
                        <tr>
                            <td scope="row">{{ $promotion['id'] }}</td>
                            <td> 

                                <a href="{{route('promotions.show',['promotion'=>$promotion['id']])}}">
                                    <li>{{ $promotion['name'] }} </li>
                                </a>
                            </td>
                            <td>
                                <a href="{{route('promotions.edit',$promotion['id'])}}">edit</a>
                                <form action="{{route('promotions.destroy',$promotion->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input  type="submit" value="Delete" />
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            
            </table>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<script type="text/javascript">
    $('#search').on('keyup',function(){
        $value=$(this).val();
    $.ajax({
        type:'get',
        url:'{{URL::to('search')}}',
        data:{'search':$value},
        success:function(data){
            $('tbody').html(data);

        }
    })
    })

</script>
 </body>
 </html>
 