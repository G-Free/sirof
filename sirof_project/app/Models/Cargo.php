<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $fillable = ['nome'];

    public function userCargos()
    {
        return $this->hasMany(UserCargo::class, 'id_cargo');
    }
}
