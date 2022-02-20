<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Fname');
            $table->string('Sname');
            $table->string('gender');
            $table->bigInteger('clinic_id')->unsigned();
            $table->bigInteger('doctor_id')->unsigned();
            $table->date('dov');
            $table->datetime('Timestamp');
            $table->string('status');
            //created_at,updated_at
            $table->timestamps();

            //clinic relation
            $table->foreign('clinic_id')
                ->references('id')->on('clinics')
                ->onDelete('cascade');

            $table->foreign('doctor_id')
                ->references('id')->on('doctors')
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
        Schema::dropIfExists('books');
    }
}
