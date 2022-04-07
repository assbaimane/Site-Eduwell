<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titre extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'titre',
        'soustitre',
        'description',
    ]; // model_anchor
     
    protected $table = 'titres';
}
