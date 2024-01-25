<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $table = 'demande'; 
    protected $fillable = [
        'contenu',
        'type_demande',
        'expediteur_demande_id',
    ];
    
}
