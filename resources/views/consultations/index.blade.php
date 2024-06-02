<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<h1>Mes Consultations</h1>
@if($consultations->isEmpty())
    <p>Vous n'avez aucune consultation programmée.</p>
@else
    <table class="table">
        <thead>
            <tr>
                <th>Expert</th>
                <th>Date</th>
                <th>Heure</th>
                <th>Durée (minutes)</th>
                <th>Montant (€)</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consultations as $consultation)
                <tr>
                    <td>{{ $consultation->expert->nom }}</td>
                    <td>{{ $consultation->date_consultation }}</td>
                    <td>{{ $consultation->heure_debut }}</td>
                    <td>{{ $consultation->duree }}</td>
                    <td>{{ $consultation->montant }}</td>
                    <td>{{ $consultation->statut }}</td>
                    <td>
                        @if($consultation->statut != 'annulée')
                            <form action="{{ route('consultations.cancel', $consultation->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Annuler</button>
                                {{-- <button type="submit" class="btn btn-warning">Annuler</button> --}}
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Do you want to cancel your consultation ?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="motif_annulation">Motif d'annulation</label>
                                                    <textarea name="motif_annulation" id="motif_annulation" class="form-control" required></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-default">Cancel</button>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif