<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
           
            $table->string('Name');
            $table->string('Userame');
            $table->string('DateOfBirth');
            $table->string('Email');
            $table->string('TelephoneNo');
            $table->string('NIC_no');
            $table->string('Gender');
            $table->string('Password');
            $table->string('Reenter_Password');
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
        Schema::dropIfExists('admins');
    }
}
