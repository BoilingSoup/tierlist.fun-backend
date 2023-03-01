<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categories extends Model
{
    use HasFactory;

    const TABLE = 'categories';

    const FOREIGN_KEY = 'categories_id';

    public function tier_lists(): HasMany
    {
        return $this->hasMany(TierList::class, Categories::FOREIGN_KEY);
    }
}