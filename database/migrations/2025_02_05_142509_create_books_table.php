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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("firstname");
            $table->string("lastname");
            $table->string("names");
            $table->string('address');
            $table->string('document_type');
            $table->string('document_number');
            $table->string('phone');
            $table->string('email');
            $table->enum('claim_type', ['product', 'service']);
            $table->decimal('claimed_amount', 10, 2);
            $table->string('currency_type');
            $table->string('office_address');
            $table->text('product_or_service_description');
            $table->enum('complaint_type', ['complaint', 'claim']); // Queja o Reclamo
            $table->text('complaint_details')->nullable();
            $table->text('complaint_request')->nullable();
            $table->string('ticket')->nullable();
            $table->string('state')->default("pendiente");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
