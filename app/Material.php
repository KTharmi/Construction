<?php

namespace App;
use App\Project;
use App\Material_assignment;
use App\Drap_Material_Selection;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table="materials";
    public function projects()
    {
          return $this->hasMany(Project::class);
     }

     public function drap_material_selection()
    {
        return $this->hasOne(Drap_Material_Selection::class);
    }
    public function material_assignment(){
        return $this->hasMany(Material_assignment::class);
   }
}
