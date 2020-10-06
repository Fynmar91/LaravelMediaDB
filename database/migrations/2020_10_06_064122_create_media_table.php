<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle');
            $table->integer('index');
            $table->string('type');
            $table->integer('episodes')->nullable();
            $table->string('genre')->nullable();
            $table->string('author')->nullable();
            $table->string('status')->nullable();
            $table->integer('rating')->nullable();
            $table->string('releaseDate')->nullable();
            $table->string('startDate')->nullable();
            $table->string('completeDate')->nullable();
            $table->string('lastDate')->nullable();
            $table->unsignedBigInteger('collection_id');
            $table->timestamps();

            $table->index('collection_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('media');
    }
}