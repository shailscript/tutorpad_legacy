<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('admin_id')->unsigned();
            $table->string('name');
            $table->string('tuition_type');
            $table->string('board_type');
            $table->string('class_from');
            $table->string('class_to');
            $table->string('email');
            $table->string('phone');
            $table->string('mobile');
            $table->string('image');
            $table->text('address');
            $table->string('location');
            $table->text('description');
            $table->timestamps();
        });

        Schema::table('institutes', function($table) {
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutes');
    }
}
