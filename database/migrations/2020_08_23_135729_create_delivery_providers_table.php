<?php

use App\Enums\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_providers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('country', Country::getKeys());
            $table->decimal('price', 12, 4)->default(0);
            $table->string('currency')->default(config('currency.default'));
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
        Schema::dropIfExists('delivery_providers');
    }
}
