<?php namespace RBM\Stripe\Components;

use Cms\Classes\ComponentBase;

/**
 * StripeCheckout Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class StripeCheckout extends ComponentBase
{
    public function componentDetails(): array
    {
        return [
            'name' => 'StripeCheckout Component',
            'description' => 'This component creates a checkout button via stripe.'
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
