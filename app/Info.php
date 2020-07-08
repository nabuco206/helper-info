<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $fillable = [
        'descripcion', 'tipo','fiscalia','estado','fec_vigencia_ini','fec_vigencia_fin','user_id'
    ];    
}