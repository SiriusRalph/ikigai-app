
<div class="container">
    <h1>Modifier Consultation avec {{ $expert->nom }}</h1>
    <form action="{{ route('admin.consultations.update', $consultation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="expert_id">Expert</label>
            <select name="expert_id" id="expert_id" class="form-control" required>
                @foreach($experts as $exp)
                    <option value="{{ $exp->id }}" {{ $consultation->expert_id == $exp->id ? 'selected' : '' }}>
                        {{ $exp->nom }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_consultation">Date de consultation</label>
            <input type="date" name="date_consultation" id="date_consultation" class="form-control" value="{{ $consultation->date_consultation }}" required>
        </div>

        <div class="form-group">
            <label for="heure_debut">Heure de début</label>
            <input type="time" name="heure_debut" id="heure_debut" class="form-control" value="{{ $consultation->heure_debut }}" required>
        </div>

        <div class="form-group">
            <label for="duree">Durée (en minutes)</label>
            <input type="number" name="duree" id="duree" class="form-control" value="{{ $consultation->duree }}" min="30" required>
        </div>

        <button type="submit" class="btn btn-success">Mettre à jour</button>
    </form>
</div>
