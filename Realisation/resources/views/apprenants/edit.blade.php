<h1>Update promotion</h1>
<div>
    <form action="{{route('apprenants.update',[$apprenant->id])}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Edit apprenant </label>
            name:<input type="text"  name="name" value="{{$apprenant->name}}" >
            last name:<input type="text"  name="lastname" value="{{$apprenant->lastname}}" >
            email:<input type="text"  name="email" value="{{$apprenant->email}}" >
            <input type="hidden" name="promotion_id"  value='{{$apprenant->promotion_id}}' >

        </div>
       

        <button>Update</button>
    </form>
</div>