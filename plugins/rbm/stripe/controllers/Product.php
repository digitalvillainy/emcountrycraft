<?php

namespace Rbm\Stripe\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Rbm\Stripe\Models\Category;
use Rbm\Stripe\Models\Product as ModelsProduct;
use Rbm\Stripe\Models\ProductImages;
use System\Models\File;

/**
 * Product Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Product extends Controller
{
    public object $file;
    public Category $category;
    public $implement = [
        \Backend\Behaviors\FormController::class,
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';


    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['rbm.stripe.access_product'];

    public function onAddProduct(): void
    {
        $file = (array) files('product_images');
        echo '<pre/>';
        var_dump($file);
        die();
        $fileUpload = new ProductImages();
        $fileUpload->product_images = $file[0];
        $fileUpload->save();


        //Payload for stripe information
        $payload = [
            'name' => input('name'),
            'active' => true,
            'featured_text' => input('featured_text'),
            'price' => input('price'),
            'stock' => input('stock'),
            'product_image' => input('product_images'),
        ];

        //TODO: fix product_image file

        // Send to Stripe
        //$this->createStripeProduct($payload);
        $categoryId = $this->category->getCategoryIdByName(input('category'));
        // Send to local DB
        $dbPayload = array_merge(
            [
                'featured' => input('featured'),
                'category' => $categoryId
            ],
            $payload
        );

        (new ModelsProduct())->storeProduct($dbPayload);
        //TODO: send to DB

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
        $this->category = new Category();
        $this->vars['categories'] = $this->category->getCategoryTable()->values();
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
