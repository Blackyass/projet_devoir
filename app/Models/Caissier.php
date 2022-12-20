<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caissier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function etudiant(){
        return $this->belongsToMany(Etudiant::class);
    }
}
