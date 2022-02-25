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
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('clinic_id')->unsigned();
            $table->bigInteger('doctor_id')->unsigned();
            $table->date('dov');
            $table->time('book_time');
            $table->enum('status', array('pending', 'due', 'overdue', 'done', 'cancelled'));
            //created_at,updated_at
            $table->timestamps();

            //clinic relation
            $table->foreign('clinic_id')
                ->references('id')->on('clinics')
                ->onDelete('cascade');
            
            //Paatient relation
            $table->foreign('patient_id')
                ->references('id')->on('patients')
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
