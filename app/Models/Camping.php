<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camping extends Model
{
    use HasFactory;
    protected $table = 'campings';
    protected $fillable = [
    'camp_name',
    'camp_image1',
    'camp_image2',
    'camp_image3',
    'camp_desc',
    'camp_prix',
    ];
}
