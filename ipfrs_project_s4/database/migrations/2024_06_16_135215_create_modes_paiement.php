

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('modes_paiement')) {
            Schema::create('modes_paiement', function (Blueprint $table) {
                $table->id();
                $table->string('nom');
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('modes_paiement');
    }
};
