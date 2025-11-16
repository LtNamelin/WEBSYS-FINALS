<!DOCTYPE html>
<html lang="en">

    <?= view('components/head', [
        'title' => 'My Coffee | Road Map'
    ])?>

    <body class="bg-[#f5f2ef] text-color-dark-espresso">

        <!-- NavBar -->
        <?= view('components/header') ?>

    <div class="max-w-6xl mx-auto py-12 px-6 space-y-12">
        <!-- Title -->
        <h1 class="text-5xl font-bold text-center mb-8">My Coffee Road Map</h1>
        <!-- Road Map -->
        <section>
            <h2 class="text-3xl font-bold mb-4">Road Map</h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <?= view('components/cards/card', [
                    'title' => 'Product Module',
                    'description' => 'Add, view, edit, delete products',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ])?>

                <?= view('components/cards/card', [
                    'title' => 'Cart Module',
                    'description' => 'Allow users to add, edit, remove products and review selected product/s',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ])?>

                <?= view('components/cards/card', [
                    'title' => 'Order Module',
                    'description' => 'Handles checkout and order history',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ])?>

                <?= view('components/cards/card', [
                    'title' => 'Admin Dashboard',
                    'description' => 'Let\'s admins navigate through the system',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ])?>

                <?= view('components/cards/card', [
                    'title' => 'Auth System',
                    'description' => 'Login/register for customers and admins',
                    'price' => null,
                    'link' => null,
                    'status' => 'Backlog',
                    'color' => 'bg-gray-700',
                    'image' => '/assets/image/Backlog.svg'
                ])?>
            </div>
        </section>

    </div>

        <!-- Footer -->
        <?= view('components/footer') ?>
    </body>
</html>