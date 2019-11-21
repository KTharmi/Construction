<?php

namespace App;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Material_assignment extends Model
{
     protected $table="material_assignments";
    public function projects()
    {
          return $this->belongsTo(Project::class);
     }
}
