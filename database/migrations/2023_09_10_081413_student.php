<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('student', function (Blueprint $table) {
            $table->id('student_code');
            $table->string('school_payment_times');
            $table->integer('scholarship');
            $table->string('create_by');
            $table->string('update_by');
            $table->timestamps();

            $table->unsignedBigInteger('id_account');
            $table->foreign('id_account')->references('id')->on('account');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
