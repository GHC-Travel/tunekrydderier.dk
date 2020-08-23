<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomyReportLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economy_report_lines', function (Blueprint $table) {
            $table->id();
            $table->foreignId('economy_report_id')->constrained('economy_reports');
            $table->foreignId('payment_id')->constrained('payments');
            $table->foreignId('purchase_id')->nullable()->constrained('purchases');
            $table->decimal('payment_amount', 8, 4);
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
        Schema::dropIfExists('economy_report_lines');
    }
}
