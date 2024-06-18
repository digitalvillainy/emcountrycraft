<main class="fs-4">
    <h1>Category Builder</h1>
    <p>Categories can be added and configured here.</p>
    <form class="mb-5" data-request="onCategoryAdd" data-request-update="{mypartial: '#myDiv' }">
        <div class="d-flex flex-row justify-content-between w-25">
            <label for="category">Enter New Category:</label>
            <input type="text" id="category" name="category" />
            <input type="submit" value="Add Category" class="bg-primary border rounded" />
        </div>
    </form>
    <div id="myDiv"></div>
    <!-- TODO: Generate list of categories-->
    <div class="w-50">
        <table class="table table-striped table-dark table-small">
            <thead>
                <tr>
                    <th scope="row" class="w-25">
                        <input type="checkbox" />
                        <label>Select</label>
                    </th>
                    <th colspan="2">Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>
                        <input type="checkbox" />
                    </th>
                    <!-- TODO: Replace "Category" with actual name programmically -->
                    <td>Category</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <button class="bg-danger border rounded">Delete Selected</button>
    </div>
</main>
