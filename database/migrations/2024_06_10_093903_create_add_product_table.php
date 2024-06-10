<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('add_product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->bigInteger('price');
            $table->text('product_description');
            $table->string('product_image');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('add_product');
    }
};
