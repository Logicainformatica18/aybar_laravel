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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string("dni",100)->nullable();
            $table->string("firstname")->nullable();
            $table->string("lastname")->nullable();
            $table->string("names");
            $table->longText("message")->nullable();
            $table->string("cellphone",20)->nullable();
  
            $table->string("email")->nullable();
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
