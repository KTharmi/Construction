<?php

namespace App;
use App\Material;
use Illuminate\Database\Eloquent\Model;

class Dmaterial extends Model
{
    protected $table="dmaterials";
    //  public function material()
    //  {
    //      return $this->belongsTo(Material::class);
    //  }
     public function materials(){
        return $this->hasMany('App\Material','id','MatId');
   }
}
