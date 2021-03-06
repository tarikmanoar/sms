<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('student_id')->unique();
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('guardian_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('class_table_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('section');
            $table->string('session')->nullable();
            $table->date('dob')->nullable();
            $table->string('gender');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->text('image')->nullable();
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
        Schema::dropIfExists('students');
    }
}
