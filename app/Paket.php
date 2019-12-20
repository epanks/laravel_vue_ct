<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'paket';
    protected $fillable = [
        'kdsatker', 'nmpaket', 'pagurmp', 'trgoutput', 'kdsatoutput', 'trgoutcome', 'keuangan', 'progres_fisik', 'TahunFisik'
    ];
}
