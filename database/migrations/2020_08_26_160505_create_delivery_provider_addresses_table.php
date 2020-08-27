<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryProviderAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_provider_addresses', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('delivery_provider_id')
                ->constrained('delivery_providers');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('provider_id')->nullable();
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
        Schema::dropIfExists('delivery_provider_addresses');
    }
}
