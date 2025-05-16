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
        Schema::create('newss', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255)->nullable(false)->comment('タイトル');
            $table->string('link', 255)->nullable(false)->comment('リンク');
            $table->string('description', 255)->nullable(false)->comment('説明文');
            $table->dateTime('pub_date')->nullable(false)->comment('公開日');
            $table->string('image', 255)->nullable(false)->comment('画像');
            $table->string('img_url', 255)->nullable(false)->comment('画像URL');
            $table->tinyInteger('is_delete')->nullable(true)->default(0)->comment('利用可');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('newss');
    }
};
