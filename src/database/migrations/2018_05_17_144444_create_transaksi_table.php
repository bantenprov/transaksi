<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksies', function (Blueprint $table) {
            $table->increments('id');
			$table->uuid('uuid', 191)->unique();
			$table->string('nomor', 191)->unique();
			$table->double('total');
			$table->double('grandtotal')->nullable();
			$table->double('denda')->default('0.00');
			$table->double('potongan');
			$table->integer('admin_id')->unsigned()->nullable()->index();
			$table->integer('customer_transaksi_id')->unsigned()->nullable()->index();
			$table->integer('tarif_id')->unsigned()->nullable();
			$table->uuid('admin_uuid', 191)->index();
			$table->uuid('customer_transaksi_uuid', 191)->index();
			$table->uuid('tarif_uuid')->index();
			$table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('transaksies');
    }
}
