<?php
    $pageNumber = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
    $accountsPerPage = isset($_GET['accountsPerPage']) ? max(1, (int) $_GET['accountsPerPage']) : 10;

    $dataToUse = $users ?? [];
    $total = count($dataToUse);
    $totalPages = (int) max(1, ceil($total / $accountsPerPage));

    if($pageNumber > $totalPages)
    {
        $pageNumber = $totalPages;
    }

    $start = ($pageNumber - 1) * $accountsPerPage;
    $pageAccounts = array_slice($dataToUse, $start, $accountsPerPage);

    function querySetter(array $overrides = [])
    {
        $query = array_merge($_GET, $overrides);
        return http_build_query($query);
    }
?>
<!DOCTYPE html>
<html>
    
    <?= view('components/head', [
        'title' => 'My Coffee | Admin - Accounts'
    ])?>

    <body class="color-dark-latte">
        <!-- NavBar -->
        <?= view('components/header') ?>

        <main class="space-y-12 py-10">
            <div class="md:flex md:space-x-6">
                <?= view('components/sidebar/adminSidebar', ['active' => 'accountsPage']) ?>
                <section class=" mx-8 my-8 p-6 color-light-cappuccino rounded-xl shadow">
                    <div class="mb-6">
                        <h2 class="text-2xl text-center text-color-dark-espresso font-bold mt-4 mb-4 mx-4">Accounts</h2>
                    </div>
                    <?= view('components/control_panels/filter_search_sort/adminAccounts') ?>
                    <div class="overflow-x-auto rounded-lg shadow">
                        <table class="min-w-full text-sm text-left text-color-dark-espresso">
                            <thead class="color-light-latte">
                                <tr>
                                    <th class="px-6 py-3">First Name</th>
                                    <th class="px-6 py-3">Middle Name</th>
                                    <th class="px-6 py-3">Last Name</th>
                                    <th class="px-6 py-3">Email</th>
                                    <th class="px-6 py-3">Type</th>
                                    <th class="px-6 py-3">Created At</th>
                                    <th class="px-6 py-3">Updated At</th>
                                </tr>
                            </thead>

                            <tbody class="color-light-latte divide-y divide-gray-700">
                                <?php if (!empty($pageAccounts)): ?>
                                    <?php foreach ($pageAccounts as $user): ?>
                                        <tr>
                                            <td class="px-6 py-4"><?= esc($user->first_name) ?></td>
                                            <td class="px-6 py-4"><?= esc($user->middle_name) ?></td>
                                            <td class="px-6 py-4"><?= esc($user->last_name) ?></td>
                                            <td class="px-6 py-4"><?= esc($user->email) ?></td>
                                            <td class="px-6 py-4"><?= esc($user->type) ?></td>
                                            <td class="px-6 py-4"><?= esc($user->created_at) ?></td>
                                            <td class="px-6 py-4"><?= esc($user->updated_at) ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="7" class="text-center py-6 text-gray-400">No users found</td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>

                        <div class="color-light-latte p-4 border-t">
                            <div class="flex justify-between items-center">
                                <div class="flex items-center space-x-2">
                                    <form method="get" style="display:flex;align-items:center;gap:.5rem;">
                                        <label for="accountsPerPage" class="text-gray-700 text-sm">Show</label>
                                        <select id="accountsPerPage" name="accountsPerPage" class="p-1 border rounded text-sm" onchange="this.form.submit()">
                                            <option value="5" <?php echo $accountsPerPage == 5 ? 'selected' : ''; ?>>5</option>
                                            <option value="10" <?php echo $accountsPerPage == 10 ? 'selected' : ''; ?>>10</option>
                                            <option value="20" <?php echo $accountsPerPage == 20 ? 'selected' : ''; ?>>20</option>
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
                                        <a class="px-3 py-1 border rounded <?php echo ($pageNumber <= 1) ? 'opacity-50 pointer-events-none' : ''; ?>" href="?<?php echo querySetter(['page' => max(1, $pageNumber - 1), 'accountsPerPage' => $accountsPerPage]); ?>">Prev</a>
                                        <?php for ($p = $startPage; $p <= $endPage; $p++): ?>
                                            <a class="px-3 py-1 border rounded <?php echo ($p == $pageNumber) ? 'text-white' : ''; ?>" href="?<?php echo querySetter(['page' => $p, 'accountsPerPage' => $accountsPerPage]); ?>"><?php echo $p; ?></a>
                                        <?php endfor; ?>
                                        <a class="px-3 py-1 border rounded <?php echo ($pageNumber >= $totalPages) ? 'opacity-50 pointer-events-none' : ''; ?>" href="?<?php echo querySetter(['page' => min($totalPages, $pageNumber + 1), 'accountsPerPage' => $accountsPerPage]); ?>">Next</a>
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