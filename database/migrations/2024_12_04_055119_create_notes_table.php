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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index();
            $table->string('title')->index();
            $table->text('outline');
            $table->text('detail');
            $table->timestamp('deleted_at')->nullable(true);
            $table->timestamps();

            $table->index(['user_id', 'title']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
