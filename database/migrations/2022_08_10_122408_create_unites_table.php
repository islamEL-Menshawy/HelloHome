<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unites', function (Blueprint $table) {
            $table->id();
            $table->integer('bed_number');
            $table->integer('bathroom_number');
            $table->integer('area');
            $table->boolean('is_youtube');
            $table->integer('price');
            $table->string('video_path');
            $table->string('location_lat');
            $table->string('location_log');
            $table->foreignId('compound_id')->constrained('compounds');
            $table->foreignId('type_id')->constrained('types');
            $table->foreignId('location_id')->constrained('locations');
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
        Schema::dropIfExists('unites');
    }
}
