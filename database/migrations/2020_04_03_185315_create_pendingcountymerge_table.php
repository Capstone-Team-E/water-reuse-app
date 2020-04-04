<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendingCountyMergesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendingcountymerge', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->unsignedBigInteger('countyID');
            $table->foreign('countyID')->references('county_id')->on('counties');

            $table->unsignedBigInteger('sourceID');
            $table->foreign('sourceID')->references('source_id')->on('sources');

            $table->unsignedBigInteger('destinationID');
            $table->foreign('destinationID')->references('destination_id')->on('destinations');

            $table->unsignedBigInteger('allowedID');
            $table->foreign('allowedID')->references('allowed_id')->on('allowed');

            $table->unsignedBigInteger('codes');
            $table->foreign('codes')->references('link_id')->on('links');

            $table->unsignedBigInteger('permit');
            $table->foreign('permit')->references('link_id')->on('links');

            $table->unsignedBigInteger('incentives');
            $table->foreign('incentives')->references('link_id')->on('links');

            $table->unsignedBigInteger('moreInfo');
            $table->foreign('moreInfo')->references('link_id')->on('links');

            $table->unsignedBigInteger('userID');
            $table->foreign('userID')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendingcountymerge');
    }
}