<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cart_id')->constrained('carts');
            $table->foreignId('customer_id')->nullable()->constrained('users');
            $table->string('customer_email');
            $table->foreignId('payment_id')->constrained('payments');
            $table->foreignId('delivery_id')->constrained('deliveries');
            $table->foreignUuid('event_uuid')->constrained('stored_events', 'aggregate_uuid');
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
        Schema::dropIfExists('purchases');
    }
}
