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
        Schema::create('secrets', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('vault_id')->constrained('vaults')->onDelete('cascade');
            $table->string('type'); // Type of secret (short_text, text, image, file)
            $table->text('content'); // Content of the secret (can store text or file path)
            $table->string('filename')->nullable(); // Optional filename for files or images

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('secrets');
    }
};
