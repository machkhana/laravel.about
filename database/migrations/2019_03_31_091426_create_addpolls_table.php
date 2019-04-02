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
            $table->string('idnumber');
            $table->string('username');
            $table->string('surname');
            $table->date('birthday');
            $table->text('address');
            $table->string('mobile');
            $table->string('repair');

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
