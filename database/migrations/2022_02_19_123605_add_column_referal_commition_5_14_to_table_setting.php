<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnReferalCommition514ToTableSetting extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('settings', function (Blueprint $table) {
           $table->string('referral_commission6')->after('referral_commission5')->nullable();
           $table->string('referral_commission7')->after('referral_commission6')->nullable();
           $table->string('referral_commission8')->after('referral_commission7')->nullable();
           $table->string('referral_commission9')->after('referral_commission8')->nullable();
           $table->string('referral_commission10')->after('referral_commission9')->nullable();
           $table->string('referral_commission11')->after('referral_commission10')->nullable();
           $table->string('referral_commission12')->after('referral_commission11')->nullable();
           $table->string('referral_commission13')->after('referral_commission12')->nullable();
           $table->string('referral_commission14')->after('referral_commission13')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('settings', function (Blueprint $table) {
            //
        });
    }
}
