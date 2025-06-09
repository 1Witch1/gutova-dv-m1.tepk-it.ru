<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['name', 'loss'];

    // Связи
    public function material()
    {
        return $this->hasMany(Material::class);
    }

}
