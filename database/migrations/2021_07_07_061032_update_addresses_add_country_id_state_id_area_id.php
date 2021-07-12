<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAddressesAddCountryIdStateIdAreaId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->integer('country_id')->unsigned()->nullable()->default(1);
            $table->integer('state_id')->unsigned()->nullable()->default(1);
            $table->integer('area_id')->unsigned()->nullable()->default(1);
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('set null')->onUpdate('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function (Blueprint $table) {
            $table->dropForeign(['country_id']);
            $table->dropColumn('country_id');
            $table->dropColumn('state_id');
            $table->dropColumn('area_id');
        });
    }
}
