<?php

namespace App\Models;

use Flat3\Lodata\Attributes\LodataRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    public function shops(){
        return $this->hasMany(Shop::class);
    }
}
