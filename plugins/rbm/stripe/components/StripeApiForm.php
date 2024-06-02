<?php namespace RBM\Stripe\Components;

use Cms\Classes\ComponentBase;

/**
 * StripeApiForm Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class StripeApiForm extends ComponentBase
{
    public function componentDetails(): array
    {
        return [
            'name' => 'StripeApiForm Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties(): array
    {
        return [];
    }
}
