<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnArticulosPublished extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('articulos', function (Blueprint $table) {
            $table->timestamp('published');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('articulos', function (Blueprint $table) {
            $table->dropColumn('published');

        });
    }
}
