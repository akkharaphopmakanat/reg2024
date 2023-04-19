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
        Schema::create('account', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("username");
            $table->string("password");
            $table->tinyInteger("isActivate")->default('0');
            $table->string("type")->default('Student');
            $table->tinyInteger("level")->nullable();
        });

        DB::table('account')->insert(
            array(
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'username' => '1659902028066',
                'password' => Hash::make('Meitantei12'),
                'isActivate' => "1",
                'type' => "Admin"
            )
        );
        DB::table('account')->insert(
            array(
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'username' => '3530200004409',
                'password' => Hash::make('vkoomN,kd,u2513'),
                'isActivate' => "1",
                'type' => "Admin"
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
};
