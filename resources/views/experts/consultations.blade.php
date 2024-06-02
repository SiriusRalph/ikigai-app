<div class="container">
    <h1>Mes Consultations</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Utilisateur</th>
                <th>Email utilisateur</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Durée</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consultations as $consultation)
            <tr>
                <td>{{ $consultation->user->name }}</td>
                <td>{{ $consultation->user->email }}</td>
                <td>{{ $consultation->date_consultation }}</td>
                <td>{{ $consultation->heure_debut }}</td>
                <td>{{ $consultation->duree }} minutes</td>
                <td>{{ $consultation->statut }}</td>
                <td>
                    @if($consultation->statut === 'non réalisée')
                    <form action="{{ route('consultations.done', $consultation->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-success">Marquer comme réalisée</button>
                    </form>
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
