<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->primary(['user_id', 'is_matched_id']);
                $table->integer('user_id')->unsigned()->index();
                $table->integer('is_matched_id')->unsigned()->index();
                $table->boolean('matched_status');
                $table->integer('rate')->nullable();
                $table->mediumtext('comment')->nullable();
                $table->timestamps();
    
                $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
    
                $table->foreign('is_matched_id')
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
        Schema::dropIfExists('reviews');
    }
}
