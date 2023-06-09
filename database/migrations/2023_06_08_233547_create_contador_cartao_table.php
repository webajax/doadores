<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContadorCartaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
    {

        if (Schema::hasTable('contador_cartao')) {
            return;
        }

        Schema::create('contador_cartao', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->integer('tipo_cartao')->unique()->nullable('true');
            $table->integer('qtde')->unique()->nullable('true');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contador_cartao', function (Blueprint $table) {
            //
        });
    }
}
