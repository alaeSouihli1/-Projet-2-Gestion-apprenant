 <h1>Liste des promotions</h1>
 <a href="{{route('promotions.create')}}">Create promotion</a>
 <div>
        @foreach($promotions as $promotion)
            <a href="{{route('promotions.show',['promotion'=>$promotion['id']])}}">
                <li>{{ $promotion['name'] }}</li>
            </a>
        @endforeach
</div>

<!-- {{print_r($promotions)}} -->
