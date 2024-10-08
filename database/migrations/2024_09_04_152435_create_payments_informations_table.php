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
        Schema::create('payments_informations', function (Blueprint $table) {
            $table->id();
            $table->string('card_number'); // Card number as string (usually this would be stored in an encrypted format)
            $table->string('expiring'); // Expiration date (e.g., MM/YY format)
            $table->string('CVV'); // CVV (also should be handled securely)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments_informations');
    }
};
