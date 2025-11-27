<!DOCTYPE html>
<html lang="en">

<?= view('components/head', [
    'title' => 'Café de Lumière | Road Map'
]) ?>

<body class="bg-[#f5f2ef] text-color-dark-espresso">

    <!-- NavBar -->
    <?= view('components/header') ?>

    <div class="space-y-12 mx-auto px-6 py-12 max-w-6xl">
        <!-- Title -->
        <h1 class="mb-8 font-bold text-5xl text-center">My Coffee Road Map</h1>
        <!-- Road Map -->
        <section>
            <h2 class="mb-4 font-bold text-3xl">Road Map</h2>

            <div class="gap-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <?= view('components/cards/card', [
                    'title' => 'Product Module',
                    'description' => 'Add, view, edit, delete products',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Cart Module',
                    'description' => 'Allow users to add, edit, remove products and review selected product/s',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Order Module',
                    'description' => 'Handles checkout and order history',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Admin Dashboard',
                    'description' => 'Let\'s admins navigate through the system',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Auth System',
                    'description' => 'Login/register for customers and admins',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ]) ?>
            </div>
        </section>

    </div>

    <!-- Footer -->
    <?= view('components/footer') ?>
</body>

</html>