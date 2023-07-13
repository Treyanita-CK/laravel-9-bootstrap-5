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
        Schema::create('stokdarah', function (Blueprint $table) {
            $table->id();
            //tambah atribut
            $table->string('aWB');
            $table->string('aPRC');
            $table->string('aTC');
            $table->string('aPRCLeukodepleted');
            $table->string('aFFP');
            $table->string('aRhesusNegatif');
            $table->string('bWB');
            $table->string('bPRC');
            $table->string('bTC');
            $table->string('bPRCLeukodepleted');
            $table->string('bFFP');
            $table->string('bRhesusNegatif');
            $table->string('oWB');
            $table->string('oPRC');
            $table->string('oTC');
            $table->string('oPRCLeukodepleted');
            $table->string('oFFP');
            $table->string('oRhesusNegatif');
            $table->string('abWB');
            $table->string('abPRC');
            $table->string('abTC');
            $table->string('abPRCLeukodepleted');
            $table->string('abFFP');
            $table->string('abRhesusNegatif');
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
        Schema::dropIfExists('stokdarah');
    }
};
