<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;
    protected $table = 'norths';
    protected $fillable = [
    'titre_trajet',
    'image_trajet',
    'desc_trajet',
    'camp1_name',
    'camp1_image',
    'camp1_desc',
    'desc_prix',
    'camp2_name',
    'camp2_image',
    'camp2_desc',
    'camp2_prix',
    'transport_trajet',
    'type_trajet',
    ];
}
