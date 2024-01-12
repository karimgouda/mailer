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
        Schema::create('send_mails', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('employ_name');
            $table->text('subject')->nullable();
            $table->text('email')->nullable();
            $table->text('from_email')->nullable();
            $table->text('cc')->nullable();
            $table->text('content')->nullable();
            $table->text('file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_mails');
    }
};
