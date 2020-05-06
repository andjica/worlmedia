<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->increments('id');
            $table->string('skill_one');
            $table->integer('percent_one');
            $table->string('skill_two');
            $table->integer('percent_two');
            $table->string('skill_three');
            $table->integer('percent_three');
            $table->string('skill_four');
            $table->integer('percent_four');
            $table->string('skill_five');
            $table->integer('percent_five');
            $table->string('skill_six');
            $table->integer('percent_six');
            $table->string('skill_seven');
            $table->integer('percent_seven');
            $table->string('skill_eight');
            $table->integer('percent_eight');
            $table->string('skill_nine');
            $table->integer('percent_nine');
            $table->string('skill_ten');
            $table->integer('percent_ten');
            $table->integer('user_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('user_id')
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
        Schema::dropIfExists('skills');
    }
}
