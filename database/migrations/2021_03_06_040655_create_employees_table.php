<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('lastname', 150);
            $table->date('birthdate');
            $table->string('sex', 50);
            $table->string('phone', 50);
            $table->string('email', 150);
            $table->string('address', 150);
            $table->string('nss', 150);
            $table->string('curp', 150);
            $table->string('marital_s', 150);
            $table->foreignId('salary_id')->nullable()->constrained('salaries')->onDelete('set null');
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
        Schema::dropIfExists('employees');
    }
}
