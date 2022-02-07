<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyTable extends Migration
{
    public function up():void
    {
        Schema::create('company', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('address');
            $table->string('post_code');
            $table->string('phone');
            $table->string('fax');
            $table->string('vat_no');
            $table->string('www');
            
            $table->timestamps();
        });
    }

    public function down():void
    {
        Schema::dropIfExists('company');
    }
}
