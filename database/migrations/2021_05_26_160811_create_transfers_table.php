<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('from_user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('to_user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->decimal('send_amount', 10, 2);
            $table->decimal('receive_amount', 10, 2);
            $table->decimal('admin_amount', 10, 2)->default(0);
            $table->string('otp', 10)->nullable();
            $table->dateTime('otp_expiry_at')->nullable();
            $table->boolean('status')->default(0)->comment('0 - Pending, 1 - Completed, 2 - Failed');
            $table->dateTime('transfer_at')->nullable();
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
        Schema::dropIfExists('transfers');
    }
}
