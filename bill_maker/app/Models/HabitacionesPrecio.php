<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HabitacionesPrecio extends Model
{
    use HasFactory;
    protected $table = 'habitaciones_precio';
    protected $primaryKey = 'HAB_id';


    public function distribuidor(){

        return $this->belongsTo(Distribuidor::class, 'HAB_distribuidor_id');
    }
}
