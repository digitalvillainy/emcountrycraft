<?php

namespace RBM\Stripe;

use Backend;
use System\Classes\PluginBase;

/**
 * Plugin Information File
 *
 * @link https://docs.octobercms.com/3.x/extend/system/plugins.html
 */
class Plugin extends PluginBase
{
    /**
     * pluginDetails about this plugin.
     */
    public function pluginDetails(): array
    {
        return [
            'name' => 'rbm.stripe',
            'description' => 'A plugin to help with stripe payments.',
            'author' => 'rbm',
            'icon' => 'icon-cc-stripe'
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions(): array
    {
        return [
            'rbm.stripe.access_stripepay' => [
                'tab' => 'stripe',
                'label' => 'Access Stripe API Config',
            ],
            'rbm.stripe.access_product' => [
                'tab' => 'stripe',
                'label' => 'Access Product Catalog Builder',
            ],
        ];
    }

    /**
     * registerNavigation used by the backend.
     */
    public function registerNavigation(): array
    {
        return [
            'stripe' => [
                'label' => 'Stripe Config',
                'url' => Backend::url('rbm/stripe/stripepay'),
                'icon' => 'icon-cc-stripe',
                'permissions' => ['Rbm.Stripe.*'],
                'order' => 500,
                'sideMenu' => [
                    'stripepay' => [
                        'label' => 'Stripepay',
                        'icon' => 'icon-key',
                        'url' => Backend::url('rbm/stripe/stripepay'),
                        'permissions' => ['rbm.stripe.access_stripepay'],
                    ],
                    'product' => [
                        'label' => 'Product',
                        'icon' => 'icon-cubes',
                        'url' => Backend::url('rbm/stripe/product'),
                        'permissions' => ['rbm.stripe.access_product'],
                    ]
                ]
            ],
        ];
    }
}
