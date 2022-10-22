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

