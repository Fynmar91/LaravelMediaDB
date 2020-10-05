<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('episodes')->nullable();
            $table->integer('rating')->nullable();
            $table->string('releaseDate')->nullable();
            $table->string('startDate')->nullable();
            $table->string('completeDate')->nullable();
            $table->string('lastDate')->nullable();
            $table->integer('status')->nullable();
            $table->integer('genre')->nullable();
            $table->unsignedBigInteger('author_id')->nullable();
            $table->timestamps();

            $table->index('author_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}