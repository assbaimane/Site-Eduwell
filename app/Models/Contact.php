<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'map',
        'contact1',
        'value-contact1',
        'icone1',
        'contact2',
        'value-contact2',
        'icone2',
    ]; // model_anchor
     
    protected $table = 'contacts';
}
