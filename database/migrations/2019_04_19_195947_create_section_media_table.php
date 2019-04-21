<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSectionMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section_media', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('thumbnail')->unique();
            $table->unsignedInteger('exhibition_id');
            $table->unsignedInteger('section_id');
            $table->timestamps();

            $table->foreign('exhibition_id')->references('id')->on('exhibitions');
            $table->foreign('section_id')->references('id')->on('sections');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section_media');
    }
}
