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
        Schema::create('page_comments', function (Blueprint $table) {
            $table->id();
            $table->integer('page_id')->index();
            $table->integer('user_id')->index();
            $table->string('title')->index();
            $table->text('detail');
            $table->timestamp('deleted_at')->nullable(true);
            $table->timestamps();

            $table->index(['page_id', 'user_id', 'title']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_comments');
    }
};
