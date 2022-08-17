<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compounds', function (Blueprint $table) {
            $table->id();
            // english fields
            $table->string('title_en');
            $table->string('slug_en')->unique();
            $table->text('description_en');
            // arabic fields
            $table->string('title_ar')->nullable();
            $table->string('slug_ar')->nullable()->unique();
            $table->text('description_ar')->nullable();
            // general fields
            $table->string('website')->nullable();
            $table->foreignId('image_id')->constrained('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compounds');
    }
}
