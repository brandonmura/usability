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
        Schema::create('forum_replies', function (Blueprint $table) {
            $table->id('replyID');
            $table->unsignedBigInteger('threadID')->index();
            $table->unsignedBigInteger('userID')->index();
            $table->dateTime('date');
            $table->text('body');
            $table->unsignedBigInteger('parent_replyID')->nullable()->index();
            $table->foreign('threadID')->references('id')->on('forum_threads')->onDelete('cascade');
            $table->foreign('userID')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('parent_replyID')->references('id')->on('forum_replies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('forum_replies');
    }
};
