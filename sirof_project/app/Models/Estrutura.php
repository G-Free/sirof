<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estrutura extends Model
{
    protected $fillable = ['nome', 'parent_id'];

    public function parent()
    {
        return $this->belongsTo(Estrutura::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Estrutura::class, 'parent_id');
    }

    public function userCargos()
    {
        return $this->hasMany(UserCargo::class, 'id_estrutura');
    }
}
