<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShoppingWalletHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_wallet_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('type')->default(1)->comment('1-Added,2-Withdraw,3-Used for Shopping');
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->decimal('to_deduct', 10, 2)->nullable();
            $table->string('payment_mode')->nullable();
            $table->string('proof')->nullable();
            $table->string('txn_id')->nullable();
            $table->boolean('status')->default(0)->comment('0 - Pending, 1 - Completed, 2 - Failed');
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
        Schema::dropIfExists('shopping_wallet_histories');
    }
}
