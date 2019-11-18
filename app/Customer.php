<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
class Customer extends Model
{
    public function projects()
    {
          return $this->hasMany(Project::class);
     }
}
