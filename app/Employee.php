<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function users()
    {
        return $this->hasOne(App\User);
    }
}
