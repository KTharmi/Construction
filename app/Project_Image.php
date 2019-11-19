<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Project_Image extends Model
{
    public function projects()
    {
          return $this->belongsTo(Project::class);
     }
}
