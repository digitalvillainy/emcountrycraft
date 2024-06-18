<?php

namespace Rbm\Stripe\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use RBM\Stripe\Controllers\StripePay;

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
    public $requiredPermissions = ['rbm.stripe.access_product'];

    public function onAddProduct(): void
    {
        //Payload for stripe information
        $payload = [
            'name' => input('name'),
            'active' => true,
            'featured_text' => input('featured_text'),
            'price' => input('price'),
            'stock' => input('stock'),
            'product_image' => input('product_image'),
        ];

        // Send to Stripe
        $this->createStripeProduct($payload);
        // Send to local DB

        $dbPayload = array_merge(
            [
                'featured' => input('featured'),
                'category' => input('category')
            ],
            $payload
        );

        //send status update to _mypartial
        $this->vars['results']['status'] = true ? 'Successfully updated' : 'Unsuccessful Update';
    }

    public function createStripeProduct(array $payload)
    {
        $resultingStripeItem = (new Stripe())->createStripeProduct($payload);
        return $resultingStripeItem;
    }

    /**
     * Initial function that happens upon page load in backend
     *
     */
    public function index(): void
    {
        $this->pageTitle = 'Product Configuration | From Red Banner Media, LLC';
        $this->vars['form'] = '';
        $this->vars['test'] = '';
    }

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RBM.Stripe', 'stripe', 'product');
    }
}
