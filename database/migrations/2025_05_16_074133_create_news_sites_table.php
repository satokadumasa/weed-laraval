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
        Schema::create('news_sites', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->comment('サイト名');
            $table->string('url', 255)->comment('サイトURL');
            $table->string('language', 2)->comment('言語');
            $table->string('copyright', 2)->comment('コピーライト');
            $table->tinyInteger('is_enable')->nullable(true)->default(1)->comment('利用可');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_sites');
    }
};
