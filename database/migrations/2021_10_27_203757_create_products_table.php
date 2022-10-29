<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cate_id');
            $table->string('name_en');
            $table->string('name_ja');
            $table->string('Availability')->default(null);
            $table->string('image')->nullable();
            $table->string('qty');
            $table->tinyInteger('status');
            $table->longText('UsageMethod_en');
            $table->longText('UsageMethod_ja');
            $table->string('Stock number');
            $table->string('Volume_en');
            $table->string('Volume_ja');
            $table->string('Composition_en');
            $table->string('Composition_ja');
            $table->longText('Details_en');
            $table->longText('Details_ja');
            $table->string('price');
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
        Schema::dropIfExists('products');
    }
}
