<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'bouton',
        'image',
    ]; // model_anchor
     
    protected $table = 'banners';
}
