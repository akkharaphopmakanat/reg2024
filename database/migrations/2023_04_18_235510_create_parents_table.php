<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            $table->string("username");
            $table->date("birthday")->nullable();
            $table->integer("age")->nullable();
            $table->string("idcard",13)->nullable();
            $table->string("prefix",16)->nullable();
            $table->string("firstnameTH",64)->nullable();
            $table->string("midnameTH",64)->nullable();
            $table->string("lastnameTH",64)->nullable();
            $table->string("nameEN",64)->nullable();
            $table->string("midnameEN",64)->nullable();
            $table->string("lastnameEN",64)->nullable();
            
            $table->string("occupation")->nullable();
            $table->string("position")->nullable();
            $table->string("revenue")->nullable();
            $table->string("workplace")->nullable();
            $table->integer("typeParent");  //1 Father , 2 Mother , 3 Active Parents



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
        Schema::dropIfExists('parents');
    }
};
