<?php

namespace Rbm\Stripe\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Category Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Category extends Controller
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
    public $requiredPermissions = ['rbm.stripe.access_category'];

    public function onCategoryAdd()
    {
        $input = input('category');
        //TODO: create db table
    }

    /**
     * Initial function that happens upon page load in backend
     *
     */
    public function index(): void
    {
        $this->pageTitle = 'Product Category | From Red Banner Media, LLC';
    }

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RBM.Stripe', 'stripe', 'category');
    }
}
