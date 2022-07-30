<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('barcode', 45)->nullable();
            $table->decimal('cost', 10, 2)->default(0);
            $table->decimal('price', 10,2)->default(0);
            $table->integer('stock')->default(0);
            $table->integer('alerts')->default(5);
            $table->string('image', 100)->nullable();
            $table->date('fecha_elaboracion');
            $table->date('fecha_caducidad');

            $table->foreignId('category_id')->constrained('categories');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
