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
        Schema::create('tuition', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_times');
            $table->integer('fee');
            $table->text('note');
            $table->string('create_by');
            $table->string('update_by');
            $table->timestamps();

            $table->unsignedBigInteger('id_student');
            $table->foreign('id_student')->references('student_code')->on('student');

            $table->unsignedBigInteger('id_fee');
            $table->foreign('id_fee')->references('id')->on('fee');
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
