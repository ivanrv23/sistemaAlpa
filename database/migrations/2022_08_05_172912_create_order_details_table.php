<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            // $table->foreignId('companies_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('products_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('orders_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('affectation_igvs_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('presentations_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('quantity');
            $table->decimal('price', 12, 2);
            $table->decimal('discount', 12, 2);
            $table->decimal('igv', 12, 2);
            $table->decimal('subTotal', 12, 2);
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
        Schema::dropIfExists('order_details');
    }
}
