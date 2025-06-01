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
            $table->string('name');
            $table->string('email');
            $table->unsignedTinyInteger('role')
                  ->default(0)
                  ->comment('0: 一般, 1: 管理者');
            $table->string('password');
            $table->unsignedTinyInteger('attendance_status')
                  ->default(0)
                  ->comment('0: 勤務外, 1: 出勤, 2: 休憩 3: 退勤済');
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
