<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleyeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleyees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('lastname', 150);
            $table->date('bithdate');
            $table->string('sex', 50);
            $table->string('phone', 50);
            $table->string('email', 150);
            $table->string('address', 150);
            $table->string('nss', 150);
            $table->string('curp', 150);
            $table->foreignId('salary_id')->constrained('salaries');
            $table->boolean('status');
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
        Schema::dropIfExists('empleyees');
    }
}
