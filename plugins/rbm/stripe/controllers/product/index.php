<main class="fs-4 my-3 d-flex flex-column">
    <h1>Stripe Product Configuration</h1>
    <p>
        Add products here to create products for your store.
    </p>
    <form data-request="onAddProduct" data-request-update="{mypartial: '#myDiv' }" data-request-file class="w-25">
        <div class="my-3 d-flex flex-column">
            <label for="name">Name</label>
            <input id="name" type="text" name="name" maxlength="300" />
            <div id="name_length"></div>
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="featured_text">Featured Text</label>
            <textarea id="featured_text" name="featured_text" maxlength="1000"></textarea>
            <div id="featured_length"></div>
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="price">Price</label>
            <input id="price" type="number" name="price" step="0.25" min="0" max="10000" />
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="stock">Stock</label>
            <input id="stock" type="number" name="stock" min="0" max="100" />
        </div>
        <div class="my-3 d-flex flex-row justify-content-between w-25">
            <label for="featured">Featured Item</label>
            <input id="featured" type="checkbox" name="featured" />
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="product_images">Product Image please choose up to 4</label>
            <input id="product_images" type="file" name="product_images" accept="image/*" />
        </div>
        <div class="my-3 d-flex flex-column">
            <label for="category">Product Category</label>
            <select name="category">
                <option value="">--Please Choose a Category</option>
                <?php foreach ($categories->values() as $category) : ?>
                    <option value="<?= $category->category ?>"><?= $category->category ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <input type="submit" value="Add Product" class="bg-success border rounded" />
    </form>
    <!-- Results of creating product -->
    <div id="myDiv"></div>
</main>
<script>
    $('#price').on('keydown', function(event) {
        return parseFloat(event.currentTarget.value).toFixed(2);
    });

    $('#featured_text').on('keydown', function(event) {
        $('#featured_length').html(`${event.currentTarget.value.length}/1,000`);
    });

    $('#name').on('keydown', function(event) {
        $('#name_length').html(`${event.currentTarget.value.length}/300`);
    });
</script>
