<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Section extends Model
{
    /** @use HasFactory<\Database\Factories\SectionFactory> */
    use HasFactory;

    protected $table = 'sections';

    protected $fillable = [
        'building_id',
        'number',
        'description',
    ];

    public function building(): BelongsTo
    {
        return $this->belongsTo(Building::class);
    }
}
