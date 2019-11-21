<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Labourer extends Model
{
    protected $table="labourers";

    public function labourer_schedules(){
        return $this->hasMany(Labourer_schedule::class);
   }
}
