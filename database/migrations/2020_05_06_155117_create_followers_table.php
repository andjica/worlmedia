<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
          
                $table->primary(['user_id', 'is_following_id']);
                $table->integer('user_id')->unsigned()->index();
                $table->integer('is_following_id')->unsigned()->index();
                $table->integer('rate')->nullable();
                $table->mediumtext('comment')->nullable();
                $table->timestamps();
    
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
    
                $table->foreign('is_following_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
