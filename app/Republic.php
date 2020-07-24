<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lessor;

class Republic extends Model
{
    //
    public function lessor(){
        return $this->belongsTo('App\Lessor');
    }
}
