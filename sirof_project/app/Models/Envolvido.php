<?php

namespace App\Models;

use App\Models\Infraccao;
use App\Models\Ocorrencia;
use Illuminate\Database\Eloquent\Model;

class Envolvido extends Model
{
    protected $guarded = [];

    public function ocorrencia(){
        return $this->belongsTo(Ocorrencia::class, 'ocorrencia_id', 'id');
    }

    public function infraccoes(){
        return $this->hasMany(Infraccao::class);
    }

}
