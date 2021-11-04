<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id");
            $table->foreignId("contact_id");
            $table->foreignId("store_type_id");
            $table->string("name");
            $table->string("title");
            $table->string("banner_message");
            $table->string("slogan");
            $table->string("mission");
            $table->string("theme");
            $table->string("desc");
            $table->string("logo_path");
            $table->softDeletes();
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
        Schema::dropIfExists('stores');
    }
}
