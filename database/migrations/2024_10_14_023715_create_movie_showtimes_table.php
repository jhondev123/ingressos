<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('movie_showtimes', function (Blueprint $table) {
            $table->id();
            $table->timestamp('showtime');
            $table->foreignId('movie_id')->constrained('movies');
            $table->foreignId('room_id')->constrained('rooms');
            $table->float('price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movie_showtimes', function (Blueprint $table) {
            $table->dropForeign(['movie_id']);
            $table->dropForeign(['room_id']);

        });
        Schema::dropIfExists('movie_showtimes');

    }
};
