<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    public function up():void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company')->unique();
            $table->string('street');
            $table->string('street_number');
            $table->string('post_code');
            $table->string('city');
            $table->string('phone');
            $table->string('fax');
            $table->string('nip');
            $table->string('www');
            
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('companies');
    }
}