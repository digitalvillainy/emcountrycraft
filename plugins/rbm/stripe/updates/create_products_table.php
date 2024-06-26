<?php

namespace Rbm\Stripe\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateProductsTable Migration
 *
 * @link https://docs.octobercms.com/3.x/extend/database/structure.html
 */
return new class extends Migration
{
    /**
     * up builds the migration
     */
    public function up()
    {
        Schema::create('rbm_stripe_products', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable();
            $table->text('featured_text')->nullable();
            $table->tinyInteger('price');
            $table->tinyInteger('stock');
            $table->foreignId('category_id')
                ->index()
                ->references('id')
                ->on('rbm_stripe_categories')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('rbm_stripe_products');
    }
};
