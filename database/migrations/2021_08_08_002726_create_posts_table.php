<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//        포스트 :
//        - 타이틀 (필수)
//        - 설명 (옵셔널)
//        - 링크 (필수)
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->longText('description')->nullable();
            $table->text('link');
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
        Schema::dropIfExists('posts');
    }
}
