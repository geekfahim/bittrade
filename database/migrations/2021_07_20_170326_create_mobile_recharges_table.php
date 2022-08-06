<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMobileRechargesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobile_recharges', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->string('country', 10);
            $table->string('country_code', 10);
            $table->string('phone', 50);
            $table->string('operator', 10);
            $table->string('currency', 10)->nullable();
            $table->decimal('amount', 10, 2);
            $table->decimal('amount_inr', 10, 2)->default(0);
            $table->decimal('amount_usd', 10, 2)->default(0);
            $table->string('location_code', 10)->nullable();
            $table->string('location_name', 100)->nullable();
            $table->boolean('status')->default(0);
            $table->text('note')->nullable();
            $table->text('response')->nullable();
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
        Schema::dropIfExists('mobile_recharges');
    }
}
