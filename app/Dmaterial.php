<?php

namespace App;
use App\Material;
use Illuminate\Database\Eloquent\Model;

class Dmaterial extends Model
{
    protected $table="dmaterials";
    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}
