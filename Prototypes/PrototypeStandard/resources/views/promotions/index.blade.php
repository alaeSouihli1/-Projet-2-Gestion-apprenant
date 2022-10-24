 <h1>Liste des promotions</h1>
 <a href="{{route('promotions.create')}}">Create promotion</a>
 <div>
        @foreach($promotions as $promotion)
            <a href="{{route('promotions.show',['promotion'=>$promotion['id']])}}">
                <li>{{ $promotion['name'] }} </li>
            </a>
            <a href="{{route('promotions.edit',$promotion['id'])}}">edit</a>
            <form action="{{route('promotions.destroy',$promotion->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <input  type="submit" value="Delete" />
            </form>


        @endforeach

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    
</script>