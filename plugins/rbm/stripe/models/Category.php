<?php

namespace Rbm\Stripe\Models;

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
}
