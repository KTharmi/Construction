<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table="employees";
    public function users()
    {
        return $this->hasOne(App\User);
    }
}
