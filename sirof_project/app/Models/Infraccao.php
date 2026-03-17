<?php

namespace App\Models;

use App\Models\Envolvido;
use Illuminate\Database\Eloquent\Model;

class Infraccao extends Model
{

    public function envolvido(){
        return $this->belongsTo(Envolvido::class, 'envolvido_id', 'id');
    }

    protected $guarded = [];

}
