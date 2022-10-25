
<div id="test">

</div>
<h1>Update promotion</h1>
<div>
    <form action="{{route('promotions.update',['promotion' => $promotion->id])}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Edit Promotion </label>
        <input type="text" id="name" name="name" value="{{$promotion->name}}" >

        <button>Update</button>
    </form>
</div>
<input type="text" id="search">
<div>
   
<a href="{{route('apprenants.create',$promotion['id'])}}">ajouter apprenant</a>
    
    <table >
        <thead>
                <tr>
                    <th>name</th>
                    <th>lastname</th>
                    <th>email</th>

                </tr>
        </thead>
        <tbody id="table1" class="table1">
           @foreach($apprenants as $apprenant)
            <tr>
                <td>{{$apprenant['name']}}</td>
                <td>{{$apprenant['lastname']}}</td>
                <td>{{$apprenant['email']}}</td>
                <input type="hidden"  name="promotion_id" value="{{$apprenant->promotion_id}}" id="idp" >

                <td>
                    <a href="{{route('apprenants.edit',$apprenant['id'])}}">edit</a>
                    <form action="{{route('apprenants.destroy',$apprenant->id)}}" method="POST">
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


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<!-- 
<script type="text/javascript">
      $('#search').on('keyup',function(){
        $value=$(this).val();
        $promotion_id=$('#idp').val();
      
    $.ajax({
        type:'get',
        url:'{{URL::to("searchApprenant")}}',
        data:{'search':$value,'promotion_id':$promotion_id},
        success:function(data){
            $('tbody').html(data);

        }
    })
    })

</script> -->
<script type="text/javascript">
    $idpromo=$('#idp').val();
        $('#search').on('keyup',function(){
            $value=$(this).val();
            // if($value){
            //     $('.table1').hide();
            //     $('.table2').show();
            // }
            // else{
            //     $('.table1').show();
            //     $('.table2').hide();
            // }
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
