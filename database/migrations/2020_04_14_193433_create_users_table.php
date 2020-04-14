<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('role_id')->unsigned()->index();
            $table->integer('city_id')->nullable()->unsigned()->index();
            $table->integer('category_id')->nullable()->unsigned()->index();
            $table->text('desc_one')->nullable();
            $table->text('desc_two')->nullable();
            $table->mediumtext('skills')->nullable();
            $table->string('link')->nullable();
            $table->mediumtext('url')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');

            $table->foreign('city_id')
                ->references('id')
                ->on('cities');
                
            
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
               

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
