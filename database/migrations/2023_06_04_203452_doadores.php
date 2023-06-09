<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Doadores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('doadores')) {
            return;
        }

        Schema::create('doadores', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->id();
            $table->string('nome');
            $table->string('email')->unique()->nullable('false');
            $table->string('cpf',11)->nullable('true');
            $table->string('telefone',12)->nullable('false');
            $table->timestamp('data_nascimento')->nullable();
            $table->timestamp('data_cadastro')->nullable();
            $table->enum('intervalo_doacao',['ÚNICO','BIMESTRAL','SEMESTRAL','ANUAL']);
            $table->char('forma_pgto')->nullable('false');
            $table->string('info_pgto',200)->nullable('false');
            $table->float('valor_doacao')->nullable('false');
            $table->string('endereco')->nullable('false');
            $table->boolean('contador')->nullable('false');
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
        Schema::table('doadores', function (Blueprint $table) {
            //
        });
    }
}
