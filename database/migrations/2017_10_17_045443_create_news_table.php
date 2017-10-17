<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('childCate_id')->unsigned();
			$table->string('title')->unique();
			$table->string('alias');
			$table->mediumText('summary');
			$table->longText('content');
			$table->boolean('feature');
			$table->boolean('hot');
			$table->integer('sort')->unsigned();
			$table->integer('view')->unsigned();
			$table->boolean('active');
			$table->foreign('childCate_id')
				  ->references('id')->on('child_cates')
				  ->onDelete('cascade');
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
        Schema::dropIfExists('news');
    }
}
