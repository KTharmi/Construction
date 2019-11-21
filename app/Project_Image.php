<?php

namespace App;

use App\Project;
use Illuminate\Database\Eloquent\Model;

class Project_Image extends Model
{
     protected $table="project_images";
    public function project()
    {
          return $this->belongsTo(Project::class);
     }
}
