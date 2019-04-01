<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddpollsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addpolls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('sex');
            $table->string('username');
            $table->string('surname');
            $table->date('birthday');
            $table->text('address');
            $table->string('mobile');
            $table->string('repair');
            $table->boolean('likegorgia_1')->default(0);
            $table->boolean('likegorgia_2')->default(0);
            $table->boolean('likegorgia_3')->default(0);
            $table->boolean('likegorgia_4')->default(0);
            $table->boolean('likegorgia_5')->default(0);
            $table->boolean('likegorgia_6')->default(0);
            $table->boolean('likegorgia_7')->default(0);
            $table->boolean('likegorgia_8')->default(0);
            $table->boolean('likegorgia_9')->default(0);
            $table->boolean('likegorgia_10')->default(0);
            $table->boolean('likegorgia_11')->default(0);
            $table->boolean('likegorgia_12')->default(0);
            $table->boolean('likegorgia_13')->default(0);
            $table->boolean('likegorgia_14')->default(0);
            $table->boolean('likegorgia_15')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addpolls');
    }
}
