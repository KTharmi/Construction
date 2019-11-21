<?php

namespace App;
use App\Project;
use App\Material_assignment;
use App\Dmaterial;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table="materials";
    public function projects()
    {
          return $this->hasMany(Project::class);
     }

     public function dmaterial()
    {
        return $this->hasOne(Dmaterial::class);
    }
    public function material_assignment(){
        return $this->hasMany(Material_assignment::class);
   }
}
