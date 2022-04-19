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
        'valuecontact1',
        'icone1',
        'contact2',
        'valuecontact2',
        'icone2',
    ]; // model_anchor
     
    protected $table = 'contacts';
}
