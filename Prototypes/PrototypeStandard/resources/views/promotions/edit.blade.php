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
