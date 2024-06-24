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
        return DB::table('rbm_stripe_categories')->get();
    }

    public function createNewCategory(string $category): int
    {
        return DB::table('rbm_stripe_categories')->insert(['category' => $category]);
    }

    public function getCategoryIdByName(string $target): int
    {
        $categories = array_filter(
            $this->getCategoryTable()->values()->all(),
            function (object $category) use ($target) {
                return $category->category === $target;
            }
        );

        if (empty($categories)) {
            throw new \Exception('Category id not found');
        }

        return reset($categories)->id;
    }

    public function deleteCategory(string $target): int
    {
        $result = str_contains($target, '_') ? str_replace('_', ' ', $target) : $target;

        return DB::table('rbm_stripe_categories')
            ->select('category')
            ->where('category', '=', $result)
            ->delete();
    }
}
