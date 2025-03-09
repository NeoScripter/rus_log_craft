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
            $table->string('name_ru');
            $table->string('name_en');
            $table->string('name_cn');
            $table->string('name_jp');

            // Project attributes
            $table->enum('type', ['house', 'house_bath', 'house_garage', 'bath', 'utility']);
            $table->string('article');

            $table->boolean('is_featured')->default(false);
            $table->boolean('has_terrace')->default(false);
            $table->boolean('has_garage')->default(false);

            $table->unsignedInteger('build_area');
            $table->unsignedTinyInteger('floors');
            $table->unsignedInteger('total_area');
            $table->unsignedInteger('living_area');
            $table->unsignedInteger('roof_area');

            $table->unsignedTinyInteger('bedrooms');

            // Room type in different languages
            $table->string('room_type_ru');
            $table->string('room_type_en');
            $table->string('room_type_cn');
            $table->string('room_type_jp');

            $table->unsignedTinyInteger('bathrooms');
            $table->unsignedTinyInteger('rooms');

            $table->unsignedInteger('price_per_sqm');

            // Descriptions in different languages
            $table->text('description_ru');
            $table->text('description_en');
            $table->text('description_cn');
            $table->text('description_jp');

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
