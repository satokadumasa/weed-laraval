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
            $table->string('first_name', 128);
            $table->string('family_name', 128);
            $table->integer('status_id')->default(1);
            $table->integer('age')->default(0);
            $table->integer('gender')->default(1);
            $table->string('email', 128)->nullable(true)->default('')->index();
            $table->string('post_code', 7)->nullable(true)->default('');
            $table->integer('pref_id')->default(13);
            $table->string('address', 255)->nullable(true)->default('');
            $table->string('building_name', 255)->nullable(true)->default('');
            $table->string('room_number', 5)->nullable(true)->default('');
            $table->string('phone_number', 13)->nullable(true)->default('');
            $table->string('mobile_number', 13)->nullable(true)->default('');
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
