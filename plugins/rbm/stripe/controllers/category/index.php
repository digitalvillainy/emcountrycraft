<main class="fs-4">
    <h1>Category Builder</h1>
    <p>Categories can be added and configured here.</p>
    <form class="mb-5 w-full" data-request="onCategoryAdd" data-request-update="{ mypartial: '#myDiv', categorypartial: '#categoryList' }" data-request-success="$('#category').val('')">
        <div class="d-flex flex-column w-25">
            <label for="category">Enter New Category:</label>
            <input type="text" id="category" name="category" class="my-2" />
            <input type="submit" value="Add Category" class="bg-primary border rounded" id="submitBtn" />
        </div>
    </form>
    <form data-request="onDeleteCategory" data-request-update="{ mypartial: '#myDiv', categorypartial: '#categoryList' }">
        <div class="w-25">
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">
                            <input type="checkbox" id="selectAll" />
                        </th>
                        <th scope="col">Category</th>
                    </tr>
                </thead>
                <tbody id="categoryList">
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <th class="text-center">
                                <input type="checkbox" name="<?= $category ?>" id="<?= $category ?>" />
                            </th>
                            <td>
                                <label for="<?= $category ?>">
                                    <?= $category ?>
                                </label>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div>
            <button type="submit" class="bg-danger border rounded">Delete Selected</button>
        </div>
    </form>
    <div id="myDiv"></div>
</main>
<script>
    $('#selectAll').on('click', function(e) {
        const inputs = document.querySelectorAll('tbody input');
        if (e.currentTarget.checked === true) {
            inputs.forEach((input) => input.checked = true);
        } else {
            inputs.forEach((input) => input.checked = false);
        }
    });
</script>
