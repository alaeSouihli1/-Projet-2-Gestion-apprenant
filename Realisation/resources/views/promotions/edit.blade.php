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
<div>
<a href="{{route('apprenants.create',$promotion['id'])}}">ajouter apprenant</a>
    
    <table>
    <tr>
            <th>name</th>
            <th>lastname</th>
            <th>email</th>

        </tr>
    @foreach($apprenants as $apprenant)
       
        <tr>
            <td>{{$apprenant['name']}}</td>
            <td>{{$apprenant['lastname']}}</td>
            <td>{{$apprenant['email']}}</td>

        </tr>
    </table>
    @endforeach
</div>
