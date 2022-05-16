<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // rename table
        Schema::rename('student', 'candidate');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // rename table
        Schema::rename('candidate', 'student');
    }
};