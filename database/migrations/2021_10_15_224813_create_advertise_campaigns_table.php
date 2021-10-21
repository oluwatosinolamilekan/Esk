<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertiseCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertise_campaigns', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('from_date');
            $table->date('to_date');
            $table->float('total_budget');
            $table->float('daily_budget');
            $table->string('creative');
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
        Schema::dropIfExists('advertise_campaigns');
    }
}
