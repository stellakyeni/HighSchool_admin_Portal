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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('primary_index');
            $table->string('kcpe_marks');
            $table->string('class');
            $table->string('stream');
            $table->string('admission_number');
            $table->date('admission_date');
            $table->date('dob');
            $table->string('nationality');
            $table->string('county');
            $table->string('sub_county');
            $table->string('gender');

            $table->string('father_name');
            $table->string('father_contact');
            $table->string('father_id');
            $table->string('mother_name');
            $table->string('mother_contact');
            $table->string('mother_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
