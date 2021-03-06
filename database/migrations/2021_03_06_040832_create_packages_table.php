<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->decimal('discount', 5,2);
            $table->integer('invitation');
            $table->integer('key');
            $table->integer('ticket');
            $table->decimal('price_lm');
            $table->decimal('price_jv', 5,2);
            $table->decimal('price_sd', 5,2);
            $table->decimal('price_e', 5,2);
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
        Schema::dropIfExists('packages');
    }
}
