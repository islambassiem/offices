<?php

namespace App\Models;

use App\Models\EntityType;
use App\Models\Section;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Entity extends Model
{
    /** @use HasFactory<\Database\Factories\EntityFactory> */
    use HasFactory;

    protected $table = 'entities';

    protected $fillable = [
        'section_id',
        'entity_type_id',
        'number',
        'singularity',
        'keys_count',
        'description',
    ];

    public function section(): BelongsTo
    {
        return $this->belongsTo(Section::class);
    }

    public function entityType(): BelongsTo
    {
        return $this->belongsTo(EntityType::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'entities_users');
    }
}
