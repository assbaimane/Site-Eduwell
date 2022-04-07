<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'copyright',
        'designed',
    ]; // model_anchor
     
    protected $table = 'footers';
}
