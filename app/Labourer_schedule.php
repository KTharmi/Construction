<?php

namespace App;

use App\Labourer;
use Illuminate\Database\Eloquent\Model;

class Labourer_schedule extends Model
{
    protected $table="labourer_schedule";

    public function labourers(){
        return $this->hasMany('App\Labourer','id','LabId');
   }
}
