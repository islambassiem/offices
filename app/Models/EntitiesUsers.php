<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EntitiesUsers extends Model
{
    /** @use HasFactory<\Database\Factories\EntitiesUsersFactory> */
    use HasFactory;

    use SoftDeletes;

    protected $table = 'entities_users';

    protected $fillable = [
        'entity_id',
        'user_id',
        'deleted_at',
    ];
}
