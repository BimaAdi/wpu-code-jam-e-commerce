<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRakitLaptopItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rakit_laptop_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->boolean('selected')->default(false);
            $table->unsignedBigInteger('rakit_laptop_id');
            $table->timestamps();

            $table->foreign('rakit_laptop_id')
                ->references('id')
                ->on('rakit_laptops')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rakit_laptop_items');
    }
}
