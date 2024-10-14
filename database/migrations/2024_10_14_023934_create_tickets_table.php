<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seat_id')->constrained('seats');
            $table->foreignId('movie_id')->constrained('movies');
            $table->foreignId('movie_showtime_id')->constrained('movie_showtimes');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            $table->dropForeign(['seat_id']);
            $table->dropForeign(['movie_id']);
            $table->dropForeign(['movie_showtime_id']);
        });
        Schema::dropIfExists('tickets');
    }
};
