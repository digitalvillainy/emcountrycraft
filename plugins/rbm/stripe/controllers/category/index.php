<main class="fs-4">
    <h1>Category Builder</h1>
    <p>Categories can be added and configured here.</p>
    <form class="mb-5" data-request="onCategoryAdd" data-request-update="{ mypartial: '#myDiv', categorypartial: '#categoryList' }">
        <div class="d-flex flex-row justify-content-between w-25">
            <label for="category">Enter New Category:</label>
            <input type="text" id="category" name="category" />
            <input type="submit" value="Add Category" class="bg-primary border rounded" id="submitBtn" />
        </div>
    </form>
    <form data-request="onDeleteCategory" data-request-update="{ mypartial: '#myDiv', categorypartial: '#categoryList' }">
        <div class="w-50">
            <table class="table table-striped table-dark table-small">
                <thead>
                    <tr>
                        <th scope="row" class="w-25">
                            <input type="checkbox" id="selectAll" />
                            <label>Select</label>
                        </th>
                        <th colspan="2">Name</th>
                    </tr>
                </thead>
                <tbody id="categoryList">
                    <?php foreach ($categories as $category) : ?>
                        <tr>
                            <th>
                                <input type="checkbox" name="<?= $category ?>" />
                            </th>
                            <td>
                                <?= $category ?>
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
    $('#submitBtn').on('click', function(e) {
        $('#category').text('');
    });
</script>
