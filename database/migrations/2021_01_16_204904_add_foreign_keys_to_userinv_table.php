<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUserinvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('userinv', function (Blueprint $table) {
            $table->foreign('userId', 'userinv_ibfk_1')->references('userId')->on('userinfo')->onUpdate('RESTRICT')->onDelete('CASCADE');
            $table->foreign('productCode', 'userinv_ibfk_2')->references('productCode')->on('productinfo')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userinv', function (Blueprint $table) {
            $table->dropForeign('userinv_ibfk_1');
            $table->dropForeign('userinv_ibfk_2');
        });
    }
}
