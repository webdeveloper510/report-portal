<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldAccessWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('access_websites', function (Blueprint $table) {
            //
            $table->integer('create_report')->default(0);
            $table->integer('view_report')->default(0);
            $table->integer('edit_report')->default(0);
            $table->integer('delete_report')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('access_websites', function (Blueprint $table) {
            //
        });
    }
}
