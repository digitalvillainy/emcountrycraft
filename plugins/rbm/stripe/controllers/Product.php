<?php

namespace Rbm\Stripe\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Product Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Product extends Controller
{
    // public $implement = [
    //     \Backend\Behaviors\FormController::class,
    //     \Backend\Behaviors\ListController::class,
    // ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['rbm.stripe.product'];

    /**
     * Initial function that happens upon page load in backend
     *
     */
    public function index(): void
    {
        $this->vars['products'] = '';
    }

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Rbm.Stripe', 'stripe', 'product');
    }
}
