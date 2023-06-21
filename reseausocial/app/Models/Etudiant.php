<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $primaryKey = "user_id";

    protected $fillable = [
        'adresse',
        'telephone',
        'date_naissance',
        'ville_id',
        'user_id'
    ];
    

    public function etudiantHasVille(){
        return $this->hasOne('App\Models\Ville', 'id', 'ville_id');
    }

    public function etudiantHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    
}
