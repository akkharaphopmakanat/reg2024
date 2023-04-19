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
        Schema::create('personal_info', function (Blueprint $table) {

            $table->string("username")->primary()->default("");
            $table->date("birthday");
            $table->integer("age");
            $table->string("prefix",16);
            $table->string("firstnameTH",64);
            $table->string("midnameTH",64)->nullable();
            $table->string("lastnameTH",64);
            $table->string("nameEN",64);
            $table->string("midnameEN",64)->nullable();
            $table->string("lastnameEN",64);
            $table->string("religion");
            $table->string("race",64);
            $table->string("nationality",64);
            $table->string("houseID",16);
            $table->string("moo",4)->nullable();
            $table->string("villageName",64)->nullable();
            $table->string("soi",64)->nullable();
            $table->string("road",64)->nullable();
            $table->string("tambon",64);
            $table->string("amphoe",64);
            $table->string("province",64);
            $table->string("postcode",6);
            $table->string("telephone",64);
            $table->string("email",64);
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
        Schema::dropIfExists('personal_info');
    }
};
