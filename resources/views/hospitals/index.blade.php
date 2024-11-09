@foreach ($hospitals as $hospital)
    <div>
        <h3>{{ $hospital->name }}</h3>
        <p>Localização: {{ $hospital->location }}</p>
        <p>Leitos Disponíveis: {{ $hospital->available_beds }} / {{ $hospital->total_beds }}</p>
        <a href="{{ url('/hospitals/' . $hospital->id) }}">Ver mais</a>
    </div>
@endforeach





