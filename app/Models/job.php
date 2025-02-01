<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    protected $fillable = [
        'naziv_pozicije',
        'iskustvo',
        'kompanija',
        'lokacija',
        'opis_pozicije',
        'link',
        'ime',
        'kontakt',
        'vrsta_oglasa'
    ];
    use HasFactory;
}
