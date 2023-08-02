<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->id();
            $table->string('institute_name');
            $table->string('address');
            $table->string('email')->unique();
            $table->string('vc_name');
            $table->string('vc_email')->unique();
            $table->string('vc_cell');
            $table->string('contact_name');
            $table->string('contact_cell');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    // public function down()
    // {
    //     Schema::dropIfExists('participants');
    // }
}
