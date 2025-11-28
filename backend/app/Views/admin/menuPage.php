<?php
$pageNumber = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
$productsPerPage = isset($_GET['productsPerPage']) ? max(1, (int) $_GET['productsPerPage']) : 10;

$dataToUse = $products ?? [];
$total = count($dataToUse);
$totalPages = (int) max(1, ceil($total / $productsPerPage));

if ($pageNumber > $totalPages) {
    $pageNumber = $totalPages;
}

$start = ($pageNumber - 1) * $productsPerPage;
$pageProducts = array_slice($dataToUse, $start, $productsPerPage);

function querySetter(array $overrides = [])
{
    $query = array_merge($_GET, $overrides);
    return http_build_query($query);
}

$update_id = isset($_GET['update_id']) ? (int) $_GET['update_id'] : null;
$editing = $update_id !== null;

$productToEdit = null;
if ($editing) {
    foreach ($products as $p) {
        if ($p->id == $update_id) {
            $productToEdit = $p;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>

<?= view('components/head', [
    'title' => ' Café de Lumière | Admin - Menu'
]) ?>

<body class="color-espresso">
    <!-- NavBar -->
    <?= view('components/header') ?>

    <main class="space-y-12 py-10">
        <div class="md:flex md:space-x-6">
            <?= view('components/sidebar/adminSidebar', ['active' => 'menuPage']) ?>

            <section class="shadow mx-8 my-8 p-6 rounded-xl color-dark-latte">
                <div class="mb-6">
                    <h2 class="mx-4 mt-4 mb-4 font-bold text-color-dark-espresso text-2xl text-center">Menu Management</h2>
                </div>

                <!-- Add Product Form -->

                <form method="post" action="/admin/menuPage" enctype="multipart/form-data" class="space-y-3 mb-8">
                    <?php if ($editing): ?>
                        <input type="hidden" name="update" value="<?= esc($productToEdit->id) ?>">
                    <?php endif; ?>
                    <div class="flex sm:flex-row flex-col gap-3">
                        <input type="text" name="product_name" placeholder="Product Name" value="<?= esc(old('product_name', $productToEdit->product_name ?? '')) ?>" class="shadow-sm px-3 py-2 border border-slate-200 rounded-md w-full sm:w-1/3 color-light-latte" required>
                        <input type="number" step="0.01" name="price" placeholder="Price" value="<?= esc(old('price', $productToEdit->price ?? '')) ?>" class="shadow-sm px-3 py-2 border border-slate-200 rounded-md w-full sm:w-1/3 color-light-latte" required>
                        <input type="text" name="product_description" placeholder="Description" value="<?= esc(old('product_description', $productToEdit->product_description ?? '')) ?>" class="shadow-sm px-3 py-2 border border-slate-200 rounded-md w-full sm:w-1/3 color-light-latte" required>
                        <input type="text" name="type" placeholder="Coffee" value="<?= esc(old('type', $productToEdit->type ?? '')) ?>" class="shadow-sm px-3 py-2 border border-slate-200 rounded-md w-full sm:w-1/3 color-light-latte" required>
                        <input type="file" name="product_image" accept="image/*" class="shadow-sm px-3 py-2 border border-slate-200 rounded-md w-full sm:w-1/4 color-light-latte" required>

                        <button type="submit" class="shadow px-4 py-2 rounded-md text-white cursor-pointer color-dark-espresso"><?= $editing ? 'Update Product' : 'Add Product' ?></button>
                    </div>
                </form>

                <?= view('components/control_panels/filter_search_sort/adminMenu') ?>
                <div class="shadow rounded-lg overflow-x-auto">
                    <table class="min-w-full text-color-dark-espresso text-sm text-left">
                        <thead class="color-light-latte">
                            <tr>
                                <th class="px-6 py-3">ID</th>
                                <th class="px-6 py-3">Name</th>
                                <th class="px-6 py-3">Price</th>
                                <th class="px-6 py-3">Description</th>
                                <th class="px-6 py-3">Image</th>
                                <th class="px-6 py-3 text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-700 color-light-latte">
                            <?php if (!empty($pageProducts)): ?>
                                <?php foreach ($pageProducts as $product): ?>
                                    <tr>
                                        <td class="px-6 py-4"><?= esc($product->id) ?></td>
                                        <td class="px-6 py-4"><?= esc($product->product_name) ?></td>
                                        <td class="px-6 py-4">₱<?= esc($product->price) ?></td>
                                        <td class="px-6 py-4"><?= esc($product->product_description) ?></td>
                                        <td class="px-6 py-4">
                                            <?php if (!empty($product->product_image)): ?>
                                                <img src="/assets/uploads/images/products/<?= esc($product->product_image) ?>" alt="Product Image" class="rounded w-16 h-16 object-cover">
                                            <?php else: ?>
                                                <span class="text-gray-400 italic">No image</span>
                                            <?php endif; ?>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <form method="get" action="/admin/menuPage" class="my-2">
                                                <button type="submit" name="update_id" value="<?= esc($product->id) ?>" class="bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded-md text-white">Edit</button>
                                            </form>
                                            <form method="post" action="/admin/menuPage" class="my-2" onsubmit="return confirm('Delete this product?');">
                                                <button type="submit" name="delete" value="<?= esc($product->id) ?>" class="bg-red-600 hover:bg-red-700 mx-2 px-3 py-1 rounded-md text-white">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6" class="py-6 text-gray-400 text-center">No products available</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <div class="p-4 border-t color-light-latte">
                        <div class="flex justify-between items-center">
                            <div class="flex items-center space-x-2">
                                <form method="get" style="display:flex;align-items:center;gap:.5rem;">
                                    <label for="productsPerPage" class="text-gray-700 text-sm">Show</label>
                                    <select id="productsPerPage" name="productsPerPage" class="p-1 border rounded text-sm" onchange="this.form.submit()">
                                        <option value="5" <?php echo $productsPerPage == 5 ? 'selected' : ''; ?>>5</option>
                                        <option value="10" <?php echo $productsPerPage == 10 ? 'selected' : ''; ?>>10</option>
                                        <option value="20" <?php echo $productsPerPage == 20 ? 'selected' : ''; ?>>20</option>
                                    </select>
                                    <input type="hidden" name="page" value="1" />
                                    <span class="text-gray-700 text-sm">per page</span>
                                </form>
                            </div>

                            <div class="flex justify-end items-center space-x-2">
                                <?php if ($totalPages > 1): ?>
                                    <?php
                                    $startPage = max(1, $pageNumber - 3);
                                    $endPage = min($totalPages, $pageNumber + 3);
                                    ?>
                                    <a class="px-3 py-1 border rounded <?php echo ($pageNumber <= 1) ? 'opacity-50 pointer-events-none' : ''; ?>" href="?<?php echo querySetter(['page' => max(1, $pageNumber - 1), 'productsPerPage' => $productsPerPage]); ?>">Prev</a>
                                    <?php for ($p = $startPage; $p <= $endPage; $p++): ?>
                                        <a class="px-3 py-1 border rounded <?php echo ($p == $pageNumber) ? 'text-white' : ''; ?>" href="?<?php echo querySetter(['page' => $p, 'productsPerPage' => $productsPerPage]); ?>"><?php echo $p; ?></a>
                                    <?php endfor; ?>
                                    <a class="px-3 py-1 border rounded <?php echo ($pageNumber >= $totalPages) ? 'opacity-50 pointer-events-none' : ''; ?>" href="?<?php echo querySetter(['page' => min($totalPages, $pageNumber + 1), 'productsPerPage' => $productsPerPage]); ?>">Next</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>