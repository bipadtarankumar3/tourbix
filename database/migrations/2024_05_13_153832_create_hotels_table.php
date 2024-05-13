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
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');               
            $table->string('content');
            $table->text('youtube_video');
            $table->text('banner_image');
            $table->text('ratings');
            $table->text('feature_image');
            $table->text('location');
            $table->text('real_address');
            $table->text('map_link');
            $table->text('check_in_time');
            $table->text('check_out_time');
            $table->text('minimum_advance_reservaction');
            $table->text('maximum_day_stay_req');
            $table->text('price');
            $table->integer('exctera_price')->default(0);
            $table->integer('service_fee')->default(0);
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
        Schema::dropIfExists('hotels');
    }
};
