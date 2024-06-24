<?php

namespace Rbm\Stripe\Models;

use Model;

/**
 * ProductImages Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class ProductImages extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'rbm_stripe_product_images';

    public $attachOne = [
        'product_images' => \System\Models\File::class
    ];

    /**
     * @var array rules for validation
     */
    public $rules = [];
}
