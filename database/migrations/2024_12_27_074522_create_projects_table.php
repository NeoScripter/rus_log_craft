<?php

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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            // Project names in different languages
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('name_cn')->nullable();
            $table->string('name_jp')->nullable();

            // Project attributes
            $table->enum('type', ['house', 'house_bath', 'bath', 'utility']);
            $table->string('article');

            $table->boolean('is_featured')->default(false);
            $table->boolean('has_terrace')->default(false);
            $table->boolean('has_garage')->default(false);

            $table->unsignedInteger('build_area')->nullable();
            $table->unsignedTinyInteger('floors')->nullable();
            $table->unsignedInteger('total_area')->nullable();
            $table->unsignedInteger('living_area')->nullable();
            $table->unsignedInteger('roof_area')->nullable();

            $table->unsignedTinyInteger('bedrooms');

            // Room type in different languages
            $table->string('room_type_ru')->nullable();
            $table->string('room_type_en')->nullable();
            $table->string('room_type_cn')->nullable();
            $table->string('room_type_jp')->nullable();

            $table->unsignedTinyInteger('bathrooms');
            $table->unsignedTinyInteger('rooms');

            $table->unsignedInteger('price_per_sqm');

            // Descriptions in different languages
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->text('description_cn')->nullable();
            $table->text('description_jp')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
