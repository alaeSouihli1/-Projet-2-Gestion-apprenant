 <div>
    <input type="text" id="search">
 </div>
 
 <h1>Liste des promotions</h1>
 <a href="{{route('promotions.create')}}">Create promotion</a>

 <table>
    <thead>
        <tr>
            <th>Promotion name</th>
            <th>functions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($promotions as $promotion)
            <tr>
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