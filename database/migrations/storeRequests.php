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
            $table->string('username');
            $table->integer('url_id');
            $table->string('IP_Address');
            $table->json('headers');
            $table->string('method');
            $table->string('url_content');
            
            $table->string('query_keys')->default('none');
            $table->string('query_values')->default('none');
            $table->json('request_body');
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
