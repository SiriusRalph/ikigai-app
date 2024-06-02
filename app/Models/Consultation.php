<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['date_consultation', 'heure_debut', 'duree', 'montant', 'motif_annulation', 'user_id', 'expert_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function expert()
    {
        return $this->belongsTo(ExpertProfile::class, 'expert_id');
    }
}
