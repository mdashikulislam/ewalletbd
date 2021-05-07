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
            $table->bigIncrements('id');
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('email')->unique();
            $table->string('address')->nullable();
            $table->string('phone',11)->unique();
            $table->date('dob');
            $table->string('city',40)->nullable();
            $table->string('password');
            $table->enum('is_info_verified',['verified','unverified'])->default('unverified');
            $table->enum('is_otp_verified',['verified','unverified'])->default('unverified');
            $table->enum('id_type',['nid','passport','driving'])->default('nid');
            $table->string('nid_front',255)->nullable();
            $table->string('nid_back',255)->nullable();
            $table->string('passport',255)->nullable();
            $table->string('driving',255)->nullable();
            $table->enum('document_type',['utility','bank'])->default('utility');
            $table->string('utility',255)->nullable();
            $table->string('bank',255)->nullable();
            $table->string('image',255)->nullable();
            $table->enum('is_document_verified',['verified','unverified'])->default('unverified');
            $table->enum('status',['active','pending','reject'])->default('pending');
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
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
