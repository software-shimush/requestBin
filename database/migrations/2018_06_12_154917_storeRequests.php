<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StoreRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storeRequests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('url_id');
            $table->string('IP_Address');
            $table->string('headers')->default('none');
            $table->string('method');
            $table->string('url_content');
            $table->string('query_params')->default('none');
            $table->string('query_keys')->default('none');
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
        //
    }
}
