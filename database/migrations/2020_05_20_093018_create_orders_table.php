<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->Increments('id');
            $table->unsignedInteger('user_id');
            $table->decimal('total', 20, 6);
            $table->unsignedInteger('item_count');  
            $table->string('first_name');
            $table->string('last_name');
            $table->text('address');
            $table->string('email');
            $table->string('city');
            $table->string('country');
            $table->string('post_code');
            $table->string('phone_number');
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
}
