<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('brands', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('series', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('brand_id')->unsigned();
            $table->foreign('brand_id')->references('id')->on('brands');
            $table->timestamps();
        });

        Schema::create('parts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('subparts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
            $table->integer('part_id')->unsigned();
            $table->foreign('part_id')->references('id')->on('parts');
        });

        Schema::create('spares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('price');
            $table->integer('subpart_id')->unsigned();
            $table->foreign('subpart_id')->references('id')->on('subparts');
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
        Schema::dropIfExists('project');
    }
}
