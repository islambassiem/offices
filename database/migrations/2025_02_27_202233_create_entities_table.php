<?php

use App\Models\Building;
use App\Models\EntityType;
use App\Models\Section;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entities', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Building::class)->constrained();
            $table->foreignIdFor(Section::class)->constrained();
            $table->foreignIdFor(EntityType::class)->constrained();
            $table->string('number');
            $table->boolean('singularity')->default(0);
            $table->string('keys_count')->nullable(0);
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entities');
    }
};
