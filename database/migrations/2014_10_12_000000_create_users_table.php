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
            $table->string('name');            
            $table->unique('email');
            $table->unique('username');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role');
            $table->string('phone_number');
            $table->rememberToken();
            $table->timestamps();
            // $collection->unique('email');
            // $collection->unique('username');
            // $collection->string('name');
            // $collection->timestamp('email_verified_at')->nullable();
            // $collection->string('password');
            // $collection->string('role');
            // $collection->string('phone_number');
            // $collection->rememberToken();
            // $collection->timestamps();
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
