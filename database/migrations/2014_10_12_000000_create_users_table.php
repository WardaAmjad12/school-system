<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
// ykris@example.com
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
            $table->increments('id');
            $table->string('name');
            $table->string('phone');
            $table->string('image')->nullable();
            $table->string('dob');
            $table->string('gender');
            $table->string('class');
            $table->string('section');
            $table->string('subject');
            $table->string('id_no')->unique();
            $table->string('Fname');
            $table->string('Lname');
            $table->string('address');
            $table->string('city');
            $table->string('Pcode');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
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
