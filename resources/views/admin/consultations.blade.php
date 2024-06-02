<h1>Toutes les Consultations</h1>
<table>
    <tr>
        <th>Nom Client</th>
        <th>Email Client</th>
        <th>Nom Expert</th>
        <th>Domaine Expert</th>
        <th>Date consultation</th>
        <th>Heure début</th>
        <th>Durée</th>
        <th>Montant</th>
        <th>Statut</th>
        <th>Supprimer consultation</th>
    </tr>

    @foreach ($consultations as $consultation)
    <tr>
        <td>{{$consultation->user->name}}</td>
        <td>{{$consultation->user->email}}</td>
        <td>{{$consultation->expert->nom}}</td>
        <td>{{$consultation->expert->categorie}}</td>
        <td>{{$consultation->date_consultation}}</td>
        <td>{{$consultation->heure_debut}}</td>
        <td>{{$consultation->duree}}</td>
        <td>{{$consultation->montant}}</td>
        <td>{{$consultation->statut}}</td>

        <td>
            <form action="{{ route('admin.consultations.destroy' , $consultation->id) }}" method="POST">
                @csrf
                @method( 'DELETE')
                <button type="submit" onclick="return confirm('Supprimer la consultation ?')" class="btn btn-danger">Supprimer</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>