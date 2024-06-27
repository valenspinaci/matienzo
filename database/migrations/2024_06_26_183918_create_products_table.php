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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->set('category', ['mate', 'bombilla', 'termo', 'matera', 'yerba', 'accesorio']);
            $table->string('description');
            $table->string('colour');
            $table->integer('price');
            $table->string('origin');
            $table->integer('stock');
            $table->string('imagen1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
