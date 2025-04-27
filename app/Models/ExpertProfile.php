<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ExpertProfile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'nom', 'tel', 'categorie', 'tarif', 'experience', 'photo',
        'genre', 'domaine', 'bio'
    ];

    /**
     * Get the user that owns the ExpertProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class, 'expert_id');
    }

    

}
