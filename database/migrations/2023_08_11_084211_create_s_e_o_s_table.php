<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSEOSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_e_o_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->nullable()->constrained('pages');
            $table->foreignId('unit_id')->nullable()->constrained('unites');
            $table->foreignId('compound_id')->nullable()->constrained('compounds');
            $table->foreignId('new_id')->nullable()->constrained('news');
            $table->string("keywords_en")->default(" ");
            $table->string("keywords_ar")->default(" ");
            $table->string("description_en")->default(" ");
            $table->string("description_ar")->default(" ");
            $table->string("page_type")->default(" ");
            $table->string("robots")->default(" ");
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
        Schema::dropIfExists('s_e_o_s');
    }
}
