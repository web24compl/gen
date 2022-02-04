<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateemployeesTable extends Migration
{
    public function up():void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('position');
            $table->string('company');
            $table->string('mobile');
            $table->string('phone');
            $table->string('email');

            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('employees');
    }
}
