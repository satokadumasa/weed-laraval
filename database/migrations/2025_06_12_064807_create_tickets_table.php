<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('hash')->index();
            $table->string('ticket_code', 7)->index();
            $table->string('badge_name', 128)->index();
            $table->string('first_name', 128)->index();
            $table->string('family_name', 128)->index();
            $table->integer('status_id')->default(1);
            $table->integer('age');
            $table->integer('gender');
            $table->string('email', 128)->index();
            $table->string('post_code', 7)->index();
            $table->integer('pref_id');
            $table->string('address', 128)->index();
            $table->string('building_name', 128)->nullable(true)->index();
            $table->string('room_number', 5)->nullable(true)->index();
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
