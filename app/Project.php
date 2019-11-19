<?php

namespace App;
use App\Material;
use App\Customer;
use App\Project_Image;
use App\Material_assignment;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function materials()
    {
          return $this->hasMany(Material::class);
     }
     public function customers()
    {
          return $this->belongsTo(Customer::class);
     }
     public function material_assignment()
     {
      return $this->belongsTo(Material_assignment::class);
      }
      public function project_images()
      {
            return $this->hasMany(Project_Image::class);
       }
}
