<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ModifyAgeColumnInPlayersTable extends Migration
{
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            // Modificar la columna 'age' per permetre valors nuls (NULL)
            $table->integer('age')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            // Si revertim la migració, la columna 'age' no permetrà valors nuls
            $table->integer('age')->nullable(false)->change();
        });
    }
}
