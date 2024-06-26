<?php

namespace Rbm\Stripe\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Model;
use System\Models\File;

/**
 * Product Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'rbm_stripe_products';

    public $attachMany = [
        'product_images' => File::class
    ];

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public function getProductsTable(): Collection
    {
        return DB::table('rbm_stripe_products')->get();
    }

    public function storeProduct(array $productDetails): int
    {
        //TODO: Check if the product exists first then either update or insert
        return DB::table('rbm_stripe_products')->insert($productDetails);
    }
}
