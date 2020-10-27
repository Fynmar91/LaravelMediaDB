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
            $table->string('subtitle')->nullable();            
            $table->text('description')->nullable();            
            $table->integer('index')->nullable();
            $table->integer('size')->nullable();
            $table->string('status')->nullable();
            $table->integer('rating')->nullable();
            $table->date('releaseDate')->nullable();
            $table->date('startDate')->nullable();
            $table->date('completeDate')->nullable();
            $table->date('lastDate')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->unsignedBigInteger('collection_id')->nullable();
            $table->timestamps();

            $table->index('author_id');
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