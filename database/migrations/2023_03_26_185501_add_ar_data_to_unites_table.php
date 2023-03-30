<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddArDataToUnitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('unites', function (Blueprint $table) {
            $table->string('title_ar')->after('title');
            $table->string('description_ar')->after('description');
            $table->string('description_left_ar')->after('description_left');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('unites', function (Blueprint $table) {
            $table->dropColumn('title_ar');
            $table->dropColumn('description_ar');
            $table->dropColumn('description_left_ar');
        });
    }
}
