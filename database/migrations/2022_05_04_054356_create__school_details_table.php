<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_school_details', function (Blueprint $table) {
            $table->id('id');
            // $table->char('id', 50);
            $table->integer('schoolId');
            $table->text('school_address')->nullable();
            $table->integer('standard');
            $table->enum('division', ['A', 'B', 'C', 'D']);
            $table->integer('studentId');
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
        Schema::dropIfExists('_school_details');
    }
}
