<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContinuecarttblsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('continuecarttbls', function (Blueprint $table) {
            $table->id();
            $table->integer("productid");
            $table->string("name");
            $table->string("subtotal");
            $table->string("address");
            $table->integer("number");
          
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
        Schema::dropIfExists('continuecarttbls');
    }
}
