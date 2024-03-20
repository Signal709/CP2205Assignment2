<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            // setting up foreign keys
            $table->foreignId('author_id');
            // $table->string('slug')->unique();
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            // setting up foreign keys
            // $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};
