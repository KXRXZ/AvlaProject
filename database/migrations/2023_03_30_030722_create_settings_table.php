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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->string('number');
            $table->string('logo');
            $table->string('footer');
            $table->string('email');
            
            $table->string('buffer_margin')->default(0);
            $table->string('markup')->default(0);
            $table->string('price_adjustment')->default(0);
            $table->string('staff_incentives')->default(0);
            $table->string('manager_incentives')->default(0);
            $table->string('vat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
