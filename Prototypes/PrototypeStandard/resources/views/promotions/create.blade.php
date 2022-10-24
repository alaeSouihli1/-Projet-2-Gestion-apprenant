<h1>Create a new promotion</h1>
<div>
    <form action="{{route('promotions.store')}}" method="post">
        @csrf
        <label for="name">Promotion Name</label>
        <input type="text" id="name" name="name" >
        <button>Ajouter</button>
    </form>
</div>
