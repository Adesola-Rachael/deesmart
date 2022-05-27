<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('book_title')->nullable();
            $table->string('book_id')->nullable();
            $table->text('book_desc')->nullable();
            $table->string('book_file')->nullable();
            $table->string('book_cover')->nullable();
            $table->string('price')->nullable();
            $table->string('status')->default(1);
            $table->string('share')->nullable();
            $table->string('views')->nullable();
            $table->string('likes')->nullable();
            $table->string('download')->nullable();
            $table->text('cta_link')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
};
