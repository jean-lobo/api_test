<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            // $table->string('name');
            // $table->string('email')->unique();
            // $table->string('email_verified_at');
            // $table->string('password');
            // $table->rememberToken();

//  $table->string('serial_no')->default('0');
 $table->integer('serial_no')->default('0');
  $table->string('date')->default('0');
   $table->string('name');
    $table->string('number1')->default('0');
     $table->string('number2')->default('0');
      $table->string('number3')->default('0');
       $table->string('number4')->default('0');
        $table->string('time')->default('0');
         $table->string('number5')->default('0');
          $table->string('number6')->default('0');
          $table->string('number7')->default('0');



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
        Schema::dropIfExists('users');
    }
}
