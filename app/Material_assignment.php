<?php

namespace App;
use App\Material;
use App\Project;
use Illuminate\Database\Eloquent\Model;

class Material_assignment extends Model
{
     protected $table="material_assignments";
    public function projects()
    {
          return $this->belongsTo(Project::class);
     }

     public function materials(){
          return $this->hasMany('App\Material','id','MatId');
     }
}
