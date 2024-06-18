<?php

namespace Rbm\Stripe\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

/**
 * CreateCategoriesTable Migration
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
        Schema::create('rbm_stripe_categories', function (Blueprint $table) {
            $table->id();
            $table->text('category')->nullable();
            $table->dateTime('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * down reverses the migration
     */
    public function down()
    {
        Schema::dropIfExists('rbm_stripe_categories');
    }
};
