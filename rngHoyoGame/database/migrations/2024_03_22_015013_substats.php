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
        //
        Schema::create('relic', function (Blueprint $table) {
            $table->id();
            $table->string('substat1');
            $table->string('substat2');
            $table->string('substat3');
            $table->string('substat4');
            $table->string('submat1');
            $table->string('submat2');
            $table->string('submat3');
            $table->string('submat4');
            $table->string('level');
            $table->string('hasil');
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
        //
        Schema::dropIfExists('relic');
    }
};
