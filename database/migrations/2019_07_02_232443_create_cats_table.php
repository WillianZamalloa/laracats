<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatsTable extends Migration
{    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('breed_id');
            $table->string('name', 45);
            $table->date('date_of_birth');
            $table->enum('gender', ['MACHO', 'HEMBRA'])->default('HEMBRA');  
            $table->string('photo', 128)->nullable();          
            $table->timestamps(); 
            $table->foreign('breed_id')->references('id')->on('breeds');
            
        });
        //relation
        
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cats');
    }
}
