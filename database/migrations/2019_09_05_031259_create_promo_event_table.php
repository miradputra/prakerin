<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromoEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promo_events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('marketing_name');
            $table->string('campaign_name');
            $table->date('campaign_duration_start');
            $table->date('campaign_duration_end');
            $table->string('priority');
            $table->text('promo_description');
            $table->string('media');
            $table->decimal('gross_total');
            $table->decimal('sv');
            $table->decimal('package_total');
            $table->decimal('ppn');
            $table->decimal('grand_total');
            $table->string('type_post');
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
        Schema::dropIfExists('promo_events');
    }
}
