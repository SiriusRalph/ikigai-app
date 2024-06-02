<!-- resources/views/consultations/create.blade.php -->
<!-- Inclure jQuery et jQuery UI -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<!-- Script pour désactiver les dates prises -->
<script>
$(function() {
    var consultationsPrises = @json(array_combine($datesPrises, $heuresPrises));
    $('#date_consultation').datepicker({
        beforeShowDay: function(date) {
            var stringDate = $.datepicker.formatDate('yy-mm-dd', date);
            if (consultationsPrises[stringDate]) {
                var heuresDisponibles = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];
                for (var i = 0; i < heuresDisponibles.length; i++) {
                    if (!consultationsPrises[stringDate].includes(heuresDisponibles[i])) {
                        return [true]; 
                    }
                }
                return [false]; 
            }
            return [true];
        },
        onSelect: function(selectedDate) {
            var selectedDateString = $.datepicker.formatDate('yy-mm-dd', new Date(selectedDate));
            var heuresPrisesPourDate = consultationsPrises[selectedDateString] || [];
            $('#heure_debut').empty();
            var heuresDisponibles = ['08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00'];
            $.each(heuresDisponibles, function(index, heure) {
                if (!heuresPrisesPourDate.includes(heure)) {
                    $('#heure_debut').append($('<option>', {
                        value: heure,
                        text: heure
                    }));
                }
            });
        }
    });
});
</script>
<h1>Nouvelle Consultation avec {{ $expert->nom }}</h1>
<form action="{{ route('consultations.store') }}" method="POST">
    @csrf
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <input type="hidden" name="expert_id" value="{{ $expert->id }}">

        <div class="form-group">
            <label for="date_consultation">Date de consultation</label>
            <input type="text" name="date_consultation" id="date_consultation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="heure_debut">Heure de début</label>
            <select name="heure_debut" id="heure_debut" class="form-control" required>

            </select>
        </div>

        <div class="form-group">
            <label for="duree">Durée (en minutes)</label>
            <input type="number" name="duree" id="duree" class="form-control" min="30" required>
        </div>

    <input type="hidden" name="montant" value="{{ $expert->tarif }}">

        <button type="submit" class="btn btn-success">Créer</button>
</form>
