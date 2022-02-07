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
            $table->string('company')->nullable(false);
            $table->string('position');
            $table->string('department');
            $table->string('mobile');
            $table->string('email');
            $table->timestamps();
            // $table->foreign('company')
            //     ->references('company')
            //     ->on('companies')
            //     ->onDelete('cascade');
        });
    }

    public function down():void
    {
        Schema::dropIfExists('employees');
    }
}
