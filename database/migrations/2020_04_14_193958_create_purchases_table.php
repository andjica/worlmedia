<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('acc_type_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->dateTime('date_of_purcase')->nullable();
            $table->dateTime('valid_until')->nullable();
            $table->integer('price');
            $table->timestamps();

            $table->foreign('acc_type_id')
            ->references('id')
            ->on('account_types')
            ->onDelete('cascade');

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
        Schema::dropIfExists('purchases');
    }
}
