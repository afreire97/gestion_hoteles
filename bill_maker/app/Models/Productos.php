<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    protected $table = 'productos';
    protected $primaryKey = 'PRO_id';

    protected $fillable = [
        'PRO_nombre',
        'PRO_tipo',
        'PRO_cifra',
        // 'PRO_pais_id', // columna que referencia al país
    ];

    // public function pais()
    // {
    //     return $this->belongsTo(Pais::class, 'PRO_pais_id', 'PAI_id');
    // }
}
