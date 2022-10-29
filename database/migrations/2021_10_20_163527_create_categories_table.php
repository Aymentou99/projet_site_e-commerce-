<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_ja');
            $table->string('slug_en');
            $table->string('slug_ja');
            $table->longText('description_en');
            $table->longText('description_ja');
            $table->string('meta_title_en');
            $table->string('meta_title_ja');
            $table->string('meta_description_en');
            $table->string('meta_description_ja');
            $table->string('small_description_en');
            $table->string('small_description_ja');
            $table->string('meta_keyword_en');
            $table->string('meta_keyword_ja');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('categories');
    }
}
