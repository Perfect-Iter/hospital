<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorAvailabilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor__availabilities', function (Blueprint $table) {
            $table->id()->unsigned();
            $table->bigInteger('cid')->unsigned()->index()->nullable();
            $table->bigInteger('did')->unsigned()->index()->nullable();
            $table->string('day');
            $table->time('starttime');
            $table->time('endtime');
            
            //created_at,updated_at
            $table->timestamps();
            
            //clinic relation
            $table->foreign('cid')
            ->references('id')->on('clinics');

            $table->foreign('did')
            ->references('id')->on('doctors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctor__availabilities');
    }
}
