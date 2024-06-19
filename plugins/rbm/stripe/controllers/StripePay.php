<?php

namespace RBM\Stripe\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use RBM\Stripe\Models\Config;
use Illuminate\Support\Facades\Crypt;

/**
 * Stripe Pay Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class StripePay extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var string formConfig file */
    public string $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public string $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['Rbm.Stripe.access_product'];

    public Config $config;

    public function boot(): void
    {
    }

    /**
     * method that for the plugin form.
     * updates or inserts to rbm_stripe_configs table
     */
    public function onStoreStripeApiKey(): void
    {
        $input = Crypt::encryptString(input('stripeApiKey'));
        $results = 0;

        if (count($this->config->getStripeConfigTable()->get())) {
            $results = $this->config->updateConfig($input);
        } else {
            $results = $this->config->insertNewConfig($input);
        }
        $this->vars['results']['status'] = $results !== 0 ? 'Successfully updated' : 'Unsuccessful Update';
    }

    /**
     * Initial function that happens upon page load in backend
     *
     */
    public function index(): void
    {
        $this->pageTitle = 'Stripe Payment Configurator | From Red Banner Media, LLC';
        $stripeConfig = $this->config->getConfigKey();
        $this->vars['stripe_api_key'] = strlen($stripeConfig) > 0 ? $stripeConfig : '';
    }

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();
        $this->config = new Config();
        BackendMenu::setContext('RBM.Stripe', 'stripe', 'stripepay');
    }
}
