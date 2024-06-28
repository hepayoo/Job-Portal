<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'company_id' ,'price','img',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function seekers()
    {
        return $this->belongsToMany(Seeker::class, 'seeker_offre', 'offre_id', 'seeker_id');
    }
}
