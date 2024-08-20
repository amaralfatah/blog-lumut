<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('content');
            $table->timestamp('date');
            $table->string('username', 45);
            $table->foreign('username')->references('username')->on('users')->onDelete('no action');
            $table->timestamps(); // Adds `created_at` and `updated_at` columns
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['username']);
        });
        Schema::dropIfExists('posts');
    }
}
