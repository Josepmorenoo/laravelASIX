<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        if (!Schema::hasTable('team_invitations')) {
            Schema::create('team_invitations', function (Blueprint $table) {
                $table->id();
                $table->integer('team_id');
                $table->string('email');
                $table->string('role')->nullable();
                $table->timestamps();

                $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_invitations');
    }
};
