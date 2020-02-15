<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('employee', function (Blueprint $table) {
            $table->Increments('Empid');
            $table->char('Name',50)->index();
            $table->char('Address',100);
            $table->char('Phone',10)->index();
            $table->integer('Hourlypay');
            #$table->timestamps();
        });*/
        Schema::table('employee', function ($table) {
            $table->renameColumn('Empid', 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
