<main class="fs-4 my-3 d-flex flex-column">
    <h1>Stripe Product Configuration</h1>
    <p>
        Add products here to create products for your store.
    </p>
    <form class="w-25">
        <div class="my-3 d-flex flex-column">
            <label for="name">Name</label>
            <input type="text" name="name" />
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="featured_text">Featured Text</label>
            <textarea name="feature_text"></textarea>
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="price">Price</label>
            <input type="number" name="price" />
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="stock">Stock</label>
            <input type="range" name="stock" />
        </div>
        <div class="my-3 d-flex flex-row">
            <label for="featured">Featured Item</label>
            <input type="checkbox" name="featured" />
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="product_image">Product Image</label>
            <input type="file" name="product_image" />
        </div>
        <!--TODO: Pull from categories from plugin-->
        <div class="my-3 d-flex flex-column">
            <label for="category">Product Category</label>
            <select name="category">
                <option value="">--Please Choose a Category</option>
            </select>
        </div>
        <input type="submit" value="Add Product" class="bg-success border rounded" />
    </form>
</main>
