<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntityType extends Model
{
    /** @use HasFactory<\Database\Factories\EntityTypeFactory> */
    use HasFactory;

    protected $table = 'entity_types';

    protected $fillable = [
        'name',
    ];
}
