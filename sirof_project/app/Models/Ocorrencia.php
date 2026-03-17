<?php

namespace App\Models;

use App\Models\Envolvido;
use Illuminate\Database\Eloquent\Model;

class Ocorrencia extends Model
{

    protected $guarded = [];
    
    public function envolvidos(){
        return $this->hasMany(Envolvido::class);
    }

}
