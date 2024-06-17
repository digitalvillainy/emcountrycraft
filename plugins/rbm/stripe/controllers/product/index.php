<main class="fs-4">
    <h1>Stripe Product Configuration</h1>
    <p>
        Add products here to create products for your store.
    </p>
    <form>
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label for="featured_text">Featured Text</label>
            <textarea name="feature_text"></textarea>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="number" name="price" />
        </div>
        <div>
            <label for="stock">Stock</label>
            <input type="range" name="stock" />
        </div>
        <div>
            <label for="featured">Featured Item</label>
            <input type="checkbox" name="featured" />
        </div>
        <div>
            <label for="product_image">Product Image</label>
            <input type="file" name="product_image" />
        </div>
        <div>
            <label for="product_image">Product Image</label>
            <input type="file" name="product_image" />
        </div>
        <!--TODO: Pull from categories from plugin-->
        <div>
            <label for="category">Product Image</label>
            <select name="category">
                <option value="">--Please Choose a Category</option>
            </select>
        </div>
    </form>
</main>
