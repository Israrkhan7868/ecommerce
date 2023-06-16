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
        Schema::create('basicinfos', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('cnic')->nullable();
            $table->string('qualification')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('db')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('basicinfos');
    }
};
