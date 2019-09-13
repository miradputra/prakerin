<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itempackages', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name');
            $table->text('description');
            $table->decimal('rate');
            $table->string('media_sample');
            $table->string('proposal');
            $table->string('enable_quantity');
            $table->string('type_quantity')->nullable();
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
        Schema::dropIfExists('itempackages');
    }
}
