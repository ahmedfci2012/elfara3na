<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_bills', function (Blueprint $table) {
            $table->increments('id');
            $table->string ( 'color' );
            $table->decimal ( 'weight' );
            $table->decimal ( 'price' );
            $table->decimal ( 'total_price' );
            $table->unsignedInteger ( 'section_id' );
			$table->foreign ( 'section_id' )->references ( 'id' )->on ( 'sections' );
            $table->unsignedInteger ( 'bill_id' );
			$table->foreign ( 'bill_id' )->references ( 'id' )->on ( 'bills' );
			$table->timestamps ();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sub_bills');
    }
}
