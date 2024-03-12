<?php

namespace App\Models;

use Flat3\Lodata\Attributes\LodataRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    use \Znck\Eloquent\Traits\BelongsToThrough;

    #[LodataRelationship]
    public function country(): \Znck\Eloquent\Relations\BelongsToThrough
    {
        return $this->belongsToThrough(Country::class, [City::class, Shop::class]);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }
}
