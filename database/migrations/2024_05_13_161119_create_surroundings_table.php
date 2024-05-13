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
        Schema::create('surroundings', function (Blueprint $table) {
            $table->id();
            $table->integer('tour_id');
            $table->string('type');               
            $table->text('name'); 
            $table->text('content'); 
            $table->text('distance'); 
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surroundings');
    }
};