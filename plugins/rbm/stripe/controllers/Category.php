<?php

namespace Rbm\Stripe\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Support\Facades\DB;
use RBM\Stripe\Models\Category as ModelsCategory;

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

    public ModelsCategory $category;

    public function onCategoryAdd(): void
    {
        $input = input('category');
        $results = 0;

        $results = $this->category->createNewCategory($input);
        $this->vars['categories'] = $this->category->getCategoryTable();
        $this->vars['results']['status'] = $results !== 0 ? 'Successfully updated' : 'Unsuccessful Update';
    }

    public function onDeleteCategory(): void
    {
        $categories = input();
        foreach ($categories as $key => $value) {
            $this->category->deleteCategory($key);
        }

        $results = $this->category->getCategoryTable();
        if (count($results)) {
            $this->vars['categories'] = $results;
        }
        $this->vars['results']['status'] = $results !== 0 ? 'Successfully updated' : 'Unsuccessful Update';
    }

    /**
     * Initial function that happens upon page load in backend
     *
     */
    public function index(): void
    {
        $this->pageTitle = 'Product Category | From Red Banner Media, LLC';
        // echo '<pre/>';
        // var_dump(Db::table('rbm_stripe_categories')->select('category')->where('category', '=', 'ear warmers')->get());
        // die();
        $this->vars['categories'] = $this->category->getCategoryTable()->map(function ($category) {
            return $category->category;
        });
    }

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();
        $this->category = new ModelsCategory();
        BackendMenu::setContext('RBM.Stripe', 'stripe', 'category');
    }
}
