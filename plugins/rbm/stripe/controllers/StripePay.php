<?php

namespace RBM\Stripe\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

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
    public $pageTitle = 'Stripe Payments | From Red Banner Media, LLC';

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
    public $requiredPermissions = ['rbm.stripe.stripepay'];

    public function boot(): void
    {
    }

    /**
     * method that for the plugin form.
     * updates or inserts to rbm_stripe_configs table
     */
    public function onStoreStripeApiKey(): void
    {
        $db = Db::table('rbm_stripe_configs');
        $input = Crypt::encryptString(input('stripeApiKey'));
        $results = 0;

        if (count($db->get())) {
            $results = $db->update(['stripe_api_key' => $input]);
        } else {
            $results = $db->insert(['stripe_api_key' => $input]);
        }
        $this->vars['results']['status'] = $results !== 0 ? 'Successfully updated' : 'Unsuccessful Update';
    }

    public function getStripeApiKey(): string
    {
        $db = Db::table('rbm_stripe_configs')
            ->get()
            ->value('stripe_api_key');

        try {
            return Crypt::decryptString($db);
        } catch (DecryptException $e) {
            throw $e;
        }
    }

    /**
     * Initial function that happens upon page load in backend
     *
     */
    public function index(): void
    {
        $stripeConfig = Db::table('rbm_stripe_configs')->get()->value('stripe_api_key');
        $this->vars['stripe_api_key'] = strlen($stripeConfig) > 0 ? $stripeConfig : '';
    }

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RBM.Stripe', 'stripe', 'stripepay');
    }
}
