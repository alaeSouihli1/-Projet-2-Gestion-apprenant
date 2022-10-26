 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <title>Gestion des apprenants</title>
 </head>
 <body>
    <!-- <h1>Solicode</h1> -->
<section id="section">
    <div class="container">
            <h1>Liste des promotions</h1>
            <nav>               
            <ul>
                  
                  <li>
                      <div class="search">
                          <input type="text" id="search" placeholder="Chercher promotion">
                      </div>
                  </li>
                  <li>
                      <a href="{{route('promotions.create')}}" class='ajouter'>Ajouter promotion</a>
                  </li>
                </ul> 
            </nav>  
    
        <div class="scrollbar">
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
                            <td scope="row" class="id">{{ $promotion['id'] }}</td>
                            <td > 

                                <a href="{{route('promotions.show',['promotion'=>$promotion['id']])}}" class="name">
                                    {{ $promotion['name'] }} 
                                </a>
                            </td>
                            <td class="functions">
                                <ul class="ul">
                                    <li>
                                        <a href="{{route('promotions.edit',$promotion['id'])}}" id="btn-edit">Modifier</a>
                                    </li>
                                    <li>
                                        <form action="{{route('promotions.destroy',$promotion->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input  type="submit" value="Supprimer" class="delete"/>
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
 