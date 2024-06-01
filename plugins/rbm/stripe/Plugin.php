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
    public function register()
    {
        //
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        //
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'RBM\Stripe\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * registerPermissions used by the backend.
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

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
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'stripe' => [
                'label' => 'stripe',
                'url' => Backend::url('rbm/stripe/mycontroller'),
                'icon' => 'icon-cc-stripe',
                'permissions' => ['rbm.stripe.*'],
                'order' => 500,
            ],
        ];
    }
}
