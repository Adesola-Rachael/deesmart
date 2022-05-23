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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_title')->nullable();
            $table->text('course_desc')->nullable();
            $table->string('course_img_link')->default('https://live.staticflickr.com/65535/52081209367_ff82d37a2e_q.jpg');
            $table->string('price')->nullable();
            $table->string('cat')->nullable();
            $table->text('cta_link')->nullable();
            $table->string('views')->nullable();
            $table->text('likes')->nullable();
            $table->unsignedBigInteger('cat_id');
            $table->timestamps();
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
};
