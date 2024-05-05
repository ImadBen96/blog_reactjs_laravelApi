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
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->string("slug");
            $table->text("body");
            $table->string("image");
            $table->unsignedInteger("user_id");
            $table->unsignedInteger("category_id");
            $table->enum("is_recent",[0,1]);
            $table->enum("is_most_read",[0,1]);
            $table->enum("is_featured",[0,1]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
