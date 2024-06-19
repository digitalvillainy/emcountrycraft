<?php

namespace Rbm\Stripe\Models;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Model;

/**
 * Category Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'rbm_stripe_categories';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $fillable = ['title'];

    public $timestamps = true;

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public function getCategoryTable(): Collection
    {
        return Db::table('rbm_stripe_categories')->get();
    }

    public function createNewCategory(string $category): int
    {
        return Db::table('rbm_stripe_categories')->insert(['category' => $category]);
    }

    public function deleteCategory(string $target): int
    {
        return Db::table('rbm_stripe_categories')->delete();
    }
}
