<?php

namespace Rbm\Stripe\Controllers;

use Backend\Classes\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

/**
 * Stripe Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Stripe extends Controller
{
    public object $stripe;

    /**
     * __construct the controller
     */
    public function __construct()
    {
        $this->stripe = new \Stripe\StripeClient($this->getStripeApiKey());
    }

    public function sendStripeRequest(): string
    {
        $stripeKey = $this->getStripeApiKey();
        \Stripe\Stripe::setApiKey($stripeKey);

        header('Content-Type: application/json');

        //TODO: Update with production url
        $CURRENT_DOMAIN = 'http://localhost:8000';
        //
        //TODO: get cart from cart controller
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                'price' => 'price_1PRmT2Clve5z7JqRejQqddvA',
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $CURRENT_DOMAIN . '/success',
            'cancel_url' => $CURRENT_DOMAIN . '/cancel',
        ]);

        return $checkout_session->url;
    }

    /**
     * Create a stripe product and have it entered into the DB for products
     *
     * @param array Contains the full description of the stripe product.
     * @return object gives an object from server
     *
     */
    public function createStripeProduct(array $product): object
    {
        //Send Stripe the new object needing to be created and store it.
        return $this->stripe->products->create($product);
    }

    /**
     * Gets the stripe api key from rbm_stripe_configs.
     *
     * @return String will return the decrypted key from table rbm_stripe_configs.
     */
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
}
