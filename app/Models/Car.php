<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model as DB_MODEL;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends DB_MODEL
{
    use HasFactory;

    protected $fillable = [
        'title',
        'VIN_number',
        'description',
        'model_id',
    ];

    public function model(): BelongsTo
    {
        return $this->belongsTo(Model::class);
    }


}
