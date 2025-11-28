<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Frete extends Model
{
    protected $fillable = [
        'origem',
        'destino',
        'codigo_rastreio',
        'remetente_id',
        'destinatario_id',
        'status', // 👈 adicionamos o status
    ];

    public function etapas(): HasMany
    {
        return $this->hasMany(Etapa::class);
    }
}
