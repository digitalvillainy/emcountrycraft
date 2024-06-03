<?php

namespace RBM\Stripe\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
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
     * @var string formConfig file
     */
    public string $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public string $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['rbm.stripe.stripepay'];

    public function onNewKey(): void
    {
        $db = Db::table('rbm_stripe_configs');
        $input = input('stripeApiKey');
        //TODO: Have Plugin do checkout page complete stripe transactions
        //TODO: see if you can insert updateOrInsert. Check Laravel Docs
        if (count($db->get())) {
            $db->update(['stripe_api_key' => $input]);
        } else {
            $db->insert(['stripe_api_key' => $input]);
        }
        $this->vars['results'] = ['success' => 'Successfully updated'];
    }

    /**
     * Initial function that happens upon page load in backend
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
