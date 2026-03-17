<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserCargo extends Model
{
    protected $fillable = [
        'id_user',
        'id_cargo',
        'id_estrutura',
        'estado',
        'data_inicio',
        'data_fim'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function cargo()
    {
        return $this->belongsTo(Cargo::class, 'id_cargo');
    }

    public function estrutura()
    {
        return $this->belongsTo(Estrutura::class, 'id_estrutura');
    }
}
