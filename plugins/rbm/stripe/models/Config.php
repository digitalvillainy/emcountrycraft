<?php

namespace RBM\Stripe\Models;

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
}
