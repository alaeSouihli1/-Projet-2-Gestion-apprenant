<h1>ajouter apprenant</h1>
<div>
    <form action="{{route('apprenants.store')}}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name" >
        </div>
        <div>
            <label for="name">last name</label>
            <input type="text" id="name" name="lastname" >
        </div> 
        <div>
            <label for="name">email</label>
            <input type="text" id="name" name="email" >
        </div>
        <div>
            <input type="hidden" name="promotion_id"  value='{{$promotion_id}}' >
        </div>
        <button>Ajouter</button>

    </form>
</div>
