<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('invoice_number');
            $table->bigInteger('amount');
            $table->unsignedInteger('client_id');
            $table->unsignedInteger('maker_id');
            $table->string('path');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('maker_id')->references('id')->on('invoicemakers');
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
        Schema::dropIfExists('invoices');
    }
}
