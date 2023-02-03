<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\category;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
          
                    $table->id('P_id');
                    $table->string('P_name');
                    $table->integer('P_price');
                    $table->integer('P_qt');
                    $table->string('P_img');
                    $table->string('P_type');
                    $table->string('P_desc');
                    $table->integer('cat_id');
                
                    $table->foreign('cat_id')->references('id')->on('category')->onDelete('cascade');
                  

            
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
        Schema::dropIfExists('products');
    }
}
