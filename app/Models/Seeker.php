<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seeker extends Model
{
    use HasFactory;

    public function offres()
    {
        return $this->belongsToMany(Offre::class, 'offre_seeker');
    }
}


