<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
   
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("title_en");
            $table->string("title_ar");
            $table->string("description_en");
            $table->string("description_ar");
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('books');
    }
}