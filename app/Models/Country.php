<?php

namespace App\Models;

use Flat3\Lodata\Attributes\LodataRelationship;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    public function cities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(City::class);
    }
    #[LodataRelationship]
    public function shops(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Shop::class,City::class);
    }
    #[LodataRelationship]
    public function employees(): \Staudenmeir\EloquentHasManyDeep\HasManyDeep
    {
        return $this->hasManyDeep(Employee::class, [City::class, Shop::class]);
    }
    #[LodataRelationship]
    public function addresses(): \Staudenmeir\EloquentHasManyDeep\HasManyDeep
    {
        return $this->hasManyDeep(Address::class, [City::class, Shop::class, Employee::class]);
    }
}
