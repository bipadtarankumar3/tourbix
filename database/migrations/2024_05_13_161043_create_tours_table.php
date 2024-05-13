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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->text('title');               
            $table->text('content');
            $table->text('category');
            $table->text('youtube_video');
            $table->float('minimum_advance');
            $table->float('duration');
            $table->float('min_people');
            $table->float('max_people');
            $table->text('banner_image');
            $table->text('feature_image');
            $table->text('location');
            $table->text('real_address');
            $table->text('map_link');
            $table->float('price');
            $table->float('sale_price');
            $table->string('extra_price')->default('no');
            $table->string('service_fee')->default('no');
            $table->string('fixed_date')->default('no');
            $table->string('open_hours')->default('no');
            $table->string('author_setting');
            $table->string('status')->default('draft');
            $table->string('added_by');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
