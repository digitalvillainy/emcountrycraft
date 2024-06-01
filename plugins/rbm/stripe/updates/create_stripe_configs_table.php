<?php

namespace RBM\Stripe\Updates;

use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;
use Schema;

/**
 * CreateStripeConfigsTable Migration
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
        Schema::create('rbm_stripe_stripe_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stripe_api_key')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('rbm_stripe_stripe_configs');
    }
};
