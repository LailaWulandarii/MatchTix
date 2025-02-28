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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('gender', ['male', 'female']);
            $table->integer('age');
            $table->date('birthdate');
            $table->integer('height');
            $table->integer('weight');
            $table->enum('love_language', ['Words of Affirmation', 'Acts of Service', 'Receiving Gifts', 'Physical Touch', 'Quality Time']);
            $table->enum('communication_style', ['Listener', 'Talker', 'Balanced']);
            $table->enum('music_genre', ['Pop', 'Rock', 'Jazz', 'Classical', 'Hip-hop', 'Electronic', 'Country', 'Reggae', 'Blues', 'Folk', 'Metal', 'R&B']);
            $table->enum('movie_genre', ['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi', 'Romance', 'Documentary', 'Thriller', 'Animation', 'Fantasy', 'Mystery', 'Musical']);
            $table->enum('job', ['Student', 'Engineer', 'Doctor', 'Artist', 'Entrepreneur', 'Teacher', 'Lawyer', 'Nurse', 'Architect', 'Scientist', 'Writer', 'Chef']);
            $table->enum('sports', ['Football', 'Basketball', 'Swimming', 'Running', 'Tennis', 'Badminton', 'Cycling', 'Yoga', 'Golf', 'Volleyball']);
            $table->enum('status', ['pending', 'arrived', 'done'])->default('pending');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};
