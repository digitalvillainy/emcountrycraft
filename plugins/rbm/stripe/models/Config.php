<?php

namespace RBM\Stripe\Models;

use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;
use Model;

/**
 * Config Model
 *
 * @link https://docs.octobercms.com/3.x/extend/system/models.html
 */
class Config extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string table name
     */
    public $table = 'rbm_stripe_configs';

    protected $primaryKey = 'id';

    public $incrementing = true;

    public $fillable = ['stripe_api_key'];

    public $timestamps = true;

    /**
     * @var array rules for validation
     */
    public $rules = [];

    public function getStripeConfigTable(): Builder
    {
        return Db::table('rbm_stripe_configs');
    }

    public function getConfigKey(): string|null
    {
        return Db::table('rbm_stripe_configs')
            ->get()
            ->value('stripe_api_key');
    }

    public function updateConfig(string $key): int
    {
        return $this->getConfigTable()
            ->update(['stripe_api_key' => $key]);
    }

    public function insertNewConfig(string $key): int
    {
        return $this->getConfigTable()
            ->insert(['stripe_api_key' => $key]);
    }
}
