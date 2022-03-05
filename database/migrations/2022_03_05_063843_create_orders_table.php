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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->double('amount');
            $table->string('status',255);
            $table->string('transaction_id',255)->nullable();
            $table->string('currency',255)->nullable();
            $table->string('sub_total',255)->nullable();
            $table->string('vat',255)->nullable();
            $table->string('bed_rp',255)->nullable();
            $table->string('bed_rq',255)->nullable();
            $table->string('bed_tp',255)->nullable();
            $table->string('bath_rp',255)->nullable();
            $table->string('bath_rq',255)->nullable();
            $table->string('bath_tp',255)->nullable();
            $table->string('ks_price',255)->nullable();
            $table->string('ks_quantity',255)->nullable();
            $table->string('ks_total',255)->nullable();
            $table->string('gs_price',255)->nullable();
            $table->string('gs_quantity',255)->nullable();
            $table->string('gs_total',255)->nullable();
            $table->string('bs_price',255)->nullable();
            $table->string('bs_quantity',255)->nullable();
            $table->string('bs_total',255)->nullable();
            $table->string('appoint_date',255)->nullable();
            $table->string('appoint_time',255)->nullable();
            $table->string('name',255)->nullable();
            $table->string('email',255)->nullable();
            $table->string('phone',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('post_code',255)->nullable();
            $table->string('order_note',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('area',255)->nullable();
            $table->string('fs_price',255)->nullable();
            $table->string('fs_quantity',255)->nullable();
            $table->string('fs_total',255)->nullable();
            $table->string('order_location',255)->nullable();
            $table->string('payment_type',255)->nullable();
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
        Schema::dropIfExists('orders');
    }
};
