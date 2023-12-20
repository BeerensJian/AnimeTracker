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
        Schema::create('list_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->cascadeOnDelete();
            $table->string('title_en')->nullable();
            $table->string('title_jp')->nullable();
            $table->string('mal_id')->nullable();
            $table->string('status');
            $table->text('description')->nullable();
            $table->string('image_url')->nullable();
            $table->unsignedInteger('rating')->nullable()->default(null);
            $table->unsignedInteger('episode')->default(1);
            $table->unsignedInteger('total_episodes')->nullable();
            $table->text('review')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('animes');
    }
};
