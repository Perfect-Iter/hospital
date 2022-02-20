<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('Fname');
            $table->string('Sname');
            $table->date('birth_date');
            $table->string('gender');
            $table->string('password');
            $table->integer('contact');
            $table->string('address');
            $table->integer('experience');
            $table->string('specialization');
            $table->string('region');
            //created_at,updated_at
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
        Schema::dropIfExists('doctors');
    }
}
