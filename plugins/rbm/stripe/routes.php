<?php
Route::post(
    '/api_rbm_stripe/checkout',
    function (): array {
        try {
            (new \RBM\Stripe\Controllers\StripePay)->sendStripeRequest();
        } catch (Exception $e) {
            throw $e;
        }
        return ['status' => 'Ran'];
    }
);
