<?php
use Doctrine\DBAL;

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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('category')->nullable();
            $table->string('duration')->nullable();
            $table->string('pre')->nullable();
            $table->string('fee')->nullable();
            $table->string('instructor')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->string('status')->nullable();
            $table->text('details')->nullable();
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
