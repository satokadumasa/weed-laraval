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
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->default(0);
            $table->integer('pref_id')->default(0);
            $table->string('post_code', 7)->default('0000000');
            $table->string('city', 64)->default('');
            $table->string('town', 64)->default('');
            $table->string('street',128)->default('');
            $table->string('building', 128)->default('');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_prpfiles');
    }
};
