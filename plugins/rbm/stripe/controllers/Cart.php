<?php

namespace Rbm\Stripe\Controllers;

use Backend\Classes\Controller;

/**
 * Cart Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class Cart extends Controller
{
    public array $requiredPermissions = ['rbm.stripe.cart'];

    public array $cart;

    /**
     * __construct the controller
     */
    public function __construct(
        public string $price_id,
        public int $quantity
    ) {
    }

    public function setCart(string $price_id, int $quantity): void
    {
        $this->cart[] = [
            'price' => $price_id,
            'quantity' => $quantity
        ];
    }

    public function getCart(): array
    {
        return $this->cart;
    }
}
