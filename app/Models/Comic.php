<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    //Creiamo il fillable per poter utilizzare il metodo fill nel controller che inserisce tutti i dati automaticamente
    protected $fillable = [
        'title', 'description', 'thumb',  'price', 'series', 'sale_date', 'type'
    ];
}
