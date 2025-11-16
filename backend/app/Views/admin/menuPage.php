<?php
    $pageNumber = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
    $productsPerPage = isset($_GET['productsPerPage']) ? max(1, (int) $_GET['productsPerPage']) : 10;

    $dataToUse = $products ?? [];
    $total = count($dataToUse);
    $totalPages = (int) max(1, ceil($total / $productsPerPage));

    if($pageNumber > $totalPages)
    {
        $pageNumber = $totalPages;
    }

    $start = ($pageNumber - 1) * $productsPerPage;
    $pageProducts = array_slice($dataToUse, $start, $productsPerPage);

    function querySetter(array $overrides = [])
    {
        $query = array_merge($_GET, $overrides);
        return http_build_query($query);
    }
?>
<!DOCTYPE html>
<html>
    
    <?= view('components/head', [
        'title' => 'My Coffee | Admin - Menu'
    ])?>

    <body class="color-dark-latte">
        <!-- NavBar -->
        <?= view('components/header') ?>

        <main class="space-y-12 py-10">
            <div class="md:flex md:space-x-6">
                <?= view('components/sidebar/adminSidebar', ['active' => 'menuPage']) ?>

                <section class=" mx-8 my-8 p-6 color-light-cappuccino rounded-xl shadow">
                    <div class="mb-6">
                        <h2 class="text-2xl text-center text-color-dark-espresso font-bold mt-4 mb-4 mx-4">Menu Management</h2>
                    </div>

                    <!-- Add Product Form -->
                    <form method="post" action="" class="mb-8 space-y-3">
                        <div class="flex flex-col sm:flex-row gap-3">
                            <input type="text" name="name" placeholder="Product Name" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md w-full sm:w-1/3" required>
                            <input type="number" step="0.01" name="price" placeholder="Price"class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md w-full sm:w-1/3" required>
                            <input type="text" name="description" placeholder="Description" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md w-full sm:w-1/3" required>
                            <input type="file" name="image" accept="image/*" class="shadow-sm px-3 py-2 color-light-latte border border-slate-200 rounded-md w-full sm:w-1/4" required>
                            <button type="submit" class="color-dark-espresso text-white px-4 py-2 rounded-md shadow cursor-pointer">Add Product</button>
                        </div>
                    </form>

                    <?= view('components/control_panels/filter_search_sort/adminMenu') ?>
                    <div class="overflow-x-auto rounded-lg shadow">
                        <table class="min-w-full text-sm text-left text-color-dark-espresso">
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
                            <tbody class="color-light-latte divide-y divide-gray-700">
                                <?php if (!empty($pageProducts)): ?>
                                    <?php foreach ($pageProducts as $product): ?>
                                        <tr>
                                            <td class="px-6 py-4"><?= esc($product['id']) ?></td>
                                            <td class="px-6 py-4"><?= esc($product['name']) ?></td>
                                            <td class="px-6 py-4">₱<?= esc($product['price']) ?></td>
                                            <td class="px-6 py-4"><?= esc($product['description']) ?></td>
                                            <td class="px-6 py-4">
                                                <?php if (!empty($product['image'])): ?>
                                                    <img src="" alt="Product Image" class="w-16 h-16 object-cover rounded">
                                                <?php else: ?>
                                                    <span class="text-gray-400 italic">No image</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <form method="post" action="" onsubmit="return confirm('Delete this product?');">
                                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded-md">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="text-center py-6 text-gray-400">No products available</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <div class="color-light-latte p-4 border-t">
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