<h1>Recommended Experts</h1>
@if($experts->isEmpty())
    <p>No experts found based on your responses.</p>
@else
<ul>
    @foreach ($experts as $expert)
        <li>
            <img src="{{ asset('storage/' . $expert->photo) }}" alt="{{ $expert->nom }}">
            <p>{{ $expert->nom }}</p>
            <p>{{ $expert->categorie }}</p>
            <p>{{ $expert->tarif }} €</p>
            <a href="{{ route('consultations.create', ['expert_id' => $expert->id]) }}">Réserver</a>
        </li>
    @endforeach
</ul>
@endif