<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToBooksTable extends Migration
{
    public function up()
    {
        Schema::table('books', function (Blueprint $table) {
            if (!Schema::hasColumn('books', 'genre')) {
                $table->string('genre')->nullable();

            }
            if (!Schema::hasColumn('books', 'price')) {
                $table->decimal('price', 8, 2)->nullable();
            }
        });
    }

    public function down()
    {
        Schema::table('books', function (Blueprint $table) {
            if (Schema::hasColumn('books', 'genre')) {
                $table->dropColumn('genre');
            }
            if (Schema::hasColumn('books', 'price')) {
                $table->dropColumn('price');
            }
        });
    }



};
