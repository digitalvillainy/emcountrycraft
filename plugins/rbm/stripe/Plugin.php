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
            'name' => 'Stripe Payments',
            'description' => 'A plugin to help with stripe payments.',
            'author' => 'Red Banner Media, LLC',
            'icon' => 'icon-cc-stripe',
            'homepage' => 'https://redbannermedia.com',
        ];
    }

    /**
     * register method, called when the plugin is first registered.
     */
    public function register(): void
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot(): void
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents(): array
    {
        return [];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions(): array
    {
        return [
            'rbm.stripe.some_permission' => [
                'tab' => 'stripe',
                'label' => 'Some permission',
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
                'label' => 'Products config',
                'url' => Backend::url('rbm/stripe/stripepay'),
                'icon' => 'icon-cc-stripe',
                'permissions' => ['rbm.stripe.*'],
                'order' => 500,
                'sideMenu' => [
                    'Stripe API Key' => [
                        'label' => 'Stripe API Config',
                        'url' => Backend::url('rbm/stripe/stripepay'),
                        'icon' => 'icon-key',
                        'permissions' => ['rbm.stripe.stripepay'],
                    ],
                    'products' => [
                        'label' => 'Product Catalog Builder',
                        'url' => Backend::url('rbm/stripe/product'),
                        'icon' => 'icon-cubes',
                        'permissions' => ['rbm.stripe.product'],
                    ]
                ]
            ],
        ];
    }
}
