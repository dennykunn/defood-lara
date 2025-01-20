<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('image');
            $table->integer('price')->default(0);
            $table->integer('discount')->default(0);
            $table->unsignedInteger('category_id');
            $table->unsignedInteger('cuisine_id');
            $table->unsignedInteger('type_id');
            $table->timestamps();

            $table->foreign('category_id')->references('id')->on('category_menus')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('type_menus')->onDelete('cascade');
            $table->foreign('cuisine_id')->references('id')->on('cuisines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
