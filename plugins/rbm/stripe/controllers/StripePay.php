<?php

namespace RBM\Stripe\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

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


    /**
     * Initial function that happens upon page load in backend
     */
    public function index(): void
    {
        //TODO: Test if the rbm_stripe_configs table has a value in stripe_api_key, then enter that key appear in view.
        //TODO: remove the 'TestValueHere' replace with above strategy.
        $this->vars['stripe_api_key'] = 'TestValueHere';
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
