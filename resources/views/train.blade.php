<ul>
    @foreach ($trains as $train)
        <li>{{ $train->company }} - {{ $train->departure_station }} - {{ $train->arrival_station }} -
            {{ $train->train_code }}</li>
    @endforeach
</ul>
