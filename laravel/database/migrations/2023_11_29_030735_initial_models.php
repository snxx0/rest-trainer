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
        Schema::create('autors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('origen');
            $table->dateTime('nacimiento')->nullable();
        });

        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->dateTime('publicacion')->nullable();
            $table->string('editorial');
            $table->string('isdn');
            $table->unsignedBigInteger('autor_id');
            $table->foreign('autor_id')->references('id')->on('autors');
        });

        Schema::create('racks', function (Blueprint $table) {
            $table->id();
            $table->string('etiqueta');
            $table->integer('niveles');
            $table->float('ancho');
        });

        Schema::create('rows', function (Blueprint $table) {
            $table->id();
            $table->string('etiqueta');
            $table->unsignedBigInteger('rack_id');
            $table->foreign('rack_id')->references('id')->on('racks');
        });

        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->dateTime('fecha_ingreso')->nullable();
            $table->integer('estado');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('row_id');
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('row_id')->references('id')->on('rows');
        });

        Schema::create('borrows', function (Blueprint $table) {
            $table->id();
            $table->dateTime('pedido');
            $table->dateTime('entregado')->nullable();
            $table->integer('estado');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('stock_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('stock_id')->references('id')->on('stocks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('autor');
        Schema::dropIfExists('book');
        Schema::dropIfExists('rack');
        Schema::dropIfExists('row');
        Schema::dropIfExists('stock');
        Schema::dropIfExists('borrow');
    }
};
