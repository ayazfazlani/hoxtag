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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            // name 
            $table->string('name')->nullable();
            // amount
            $table->decimal('amount', 10, 2)->default(0);
            // account number 
            $table->string('account_number')->nullable();
            // methods enum easypaisa jazzcash bank
            $table->enum('method', ['easypaisa', 'jazzcash', 'bank'])->default('easypaisa');
            // status enum pending completed
            $table->enum('status', ['pending', 'completed'])->default('pending');
            // type 
            // enum deposit withdraw
            $table->enum('type', ['deposit', 'withdraw'])->default('deposit');
            // voucher image 
            $table->string('voucher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
