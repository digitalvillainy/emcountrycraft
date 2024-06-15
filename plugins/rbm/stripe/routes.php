<?php
Route::post(
    '/api_rbm_stripe/checkout',
    function (): string {
        try {
            return (new \RBM\Stripe\Controllers\StripePay)->sendStripeRequest();
        } catch (Exception $e) {
            throw $e;
        }
    }
);
