<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTnxValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tnx_values', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id')->nullable();
            $table->string('tnx_number')->nullable();
            $table->double('send_you',10,2)->nullable();
            $table->tinyInteger('send_you_base_wallets_id')->nullable();
            $table->string('send_you_type')->nullable();
            $table->string('send_you_method')->nullable();
            $table->integer('fee')->nullable();
            $table->string('fee_type')->nullable();
            $table->integer('charge')->nullable();
            $table->string('charge_type')->nullable();
            $table->double('send_to',10,2)->nullable();
            $table->tinyInteger('send_to_base_wallets_id')->nullable();
            $table->string('send_to_type')->nullable();
            $table->string('send_to_method')->nullable();
            $table->string('payment_number')->nullable();
            $table->boolean('success')->default(0)->nullable();
            $table->boolean('process')->default(0)->nullable();
            $table->boolean('rejected')->default(0)->nullable();
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
        Schema::dropIfExists('tnx_values');
    }
}
