<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as DB_MODEL;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends DB_MODEL
{
    use HasFactory;

    public function models(): HasMany
    {
        return $this->hasMany(Model::class);
    }
}
