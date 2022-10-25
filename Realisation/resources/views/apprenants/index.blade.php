<!-- 
 <h1>Liste des apprenants</h1>
 <a href="{{route('apprenants.create')}}">Create apprenant</a>

 <table>
    <thead>
        <tr>
            <th>Promotion name</th>
            <th>functions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($apprenants as $apprenant)
            <tr>
                <td> 
                    <!-- <a href="{{route('promotions.show',['promotion'=>$promotion['id']])}}"> -->
                        <li>{{ $apprenant['name'] }} </li>
                    <!-- </a> -->
                </td>
                <td>
                    <!-- <a href="{{route('promotions.edit',$promotion['id'])}}">edit</a>
                    <form action="{{route('promotions.destroy',$promotion->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input  type="submit" value="Delete" />
                    </form> -->
                </td>
            </tr>

        @endforeach
    </tbody>
  
</table> -->