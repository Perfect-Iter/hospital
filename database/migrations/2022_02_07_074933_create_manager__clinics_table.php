<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagerClinicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manager__clinics', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->bigInteger('cid')->unsigned()->index();
            $table->bigInteger('mid')->unsigned()->index();
            
            //created_at,updated_at
            $table->timestamps();

            //clinic relation
            $table->foreign('cid')
            ->references('id')->on('clinics');

            $table->foreign('mid')
            ->references('id')->on('managers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manager__clinics');
    }
}
