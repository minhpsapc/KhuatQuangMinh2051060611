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
        Schema::create('faketubes', function (Blueprint $table) {
            $table->id();
            $table->string('channelid');
            $table->string('channelname');
            $table->string('description');
            $table->string('subscriberscount');
            $table->string('url');
            $table->string('createat');
            $table->string('updatedat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faketubes');
    }
};
