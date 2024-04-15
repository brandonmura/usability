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
        Schema::create('forum_threads', function (Blueprint $table) {
            $table->id('threadID');
            $table->unsignedBigInteger('userID')->index();
            $table->dateTime('date');
            $table->unsignedBigInteger('replyID')->nullable()->index();
            $table->string('title');
            $table->text('body');
            $table->string('tags')->nullable();
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('replyID')->references('id')->on('forum_replies')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_threads');
    }
};
