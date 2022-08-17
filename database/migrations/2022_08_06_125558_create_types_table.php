<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            // english fields
            $table->string('title_en');
            $table->string('slug_en')->unique();
            // arabic fields
            $table->string('title_ar')->nullable();
            $table->string('slug_ar')->nullable()->unique();
            $table->boolean('isActive')->default(true);
            // general fields
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
        Schema::dropIfExists('types');
    }
}
