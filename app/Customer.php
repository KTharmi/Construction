<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
class Customer extends Model
{
     protected $table="customers";
    public function projects()
    {
          return $this->hasMany(Project::class);
     }
}
