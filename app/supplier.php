<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table='supplier';
    protected $fillable =['id_bahanbaku','nama_supplier','tempat'];
}
