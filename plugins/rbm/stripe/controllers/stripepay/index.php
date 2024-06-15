<!--TODO: Add instructions including how to get the API key from Stripe -->
<main class="fs-4">
    <h1>Stripe Payment Configuration</h1>
    <p>
        Enter your Stripe API Key below before creating your product catalog.
    </p>

    <form data-request="onStoreStripeApiKey" data-request-update="{mypartial: '#myDiv' }" class="my-5 d-flex justify-content-between">
        <div>
            <label for="stripeApiKey" class="me-4">Stripe API Key</label>
            <input type="password" id="stripeApiKey" name="stripeApiKey" value="<?= $stripe_api_key ?>" />
        </div>
        <div>
            <input type="submit" class="bg-info border rounded" value="Save API Key">
        </div>
    </form>
    <div id="myDiv"></div>
</main>
