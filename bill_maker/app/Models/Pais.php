<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $table = 'paises';
    protected $primaryKey = 'PAI_id';

    protected $fillable = [
        'PAI_nombre',
        'PAI_moneda',
        'PAI_idioma',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class, 'PRO_pais_id', 'PAI_id');
    }
}
