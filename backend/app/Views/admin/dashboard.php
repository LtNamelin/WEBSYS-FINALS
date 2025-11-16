<!DOCTYPE html>
<html>
<?= view('components/head', [
    'title' => 'My Coffee | Admin Dashboard'
])?>

<body class="color-dark-latte">
    <!-- NavBar -->
    <?= view('components/header') ?>

    <main class="space-y-12 py-10">
        <div class="md:flex md:space-x-6">
            <!-- Sidebar -->
            <?= view('components/sidebar/adminSidebar', ['active' => 'dashboard']) ?>

            <!-- Main Content -->
            <div class="flex-1 mx-8 my-8 space-y-12">
                <!-- Admin Dashboard Stats -->
                <section class="p-6 color-light-cappuccino rounded-xl shadow">
                    <h2 class="text-2xl text-center text-color-dark-espresso font-bold mt-4 mb-8">
                        Admin Dashboard
                    </h2>

                    <div class="gap-6 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4">
                        <?= view('components/cards/card_stats', [
                            'title' => 'Total Current Users:',
                            'value' => 0,
                            'subtitle' => null
                        ])?>

                        <?= view('components/cards/card_stats', [
                            'title' => 'Total Orders Today:',
                            'value' => 0,
                            'subtitle' => null
                        ])?>

                        <?= view('components/cards/card_stats', [
                            'title' => 'Total Orders This Week:',
                            'value' => 0,
                            'subtitle' => null
                        ])?>

                        <?= view('components/cards/card_stats', [
                            'title' => 'Total Orders This Month:',
                            'value' => 0,
                            'subtitle' => null
                        ])?>
                    </div>
                </section>

                <!-- Most Sold Items -->
                <section>
                    <div class="gap-8 grid grid-cols-1 md:grid-cols-3">
                        <!-- Today -->
                        <div class="p-4 color-light-cappuccino rounded-xl shadow">
                            <h3 class="text-xl text-center text-color-dark-espresso font-semibold mb-4">
                                Most Sold Item Today
                            </h3>
                            <?= view('components/cards/card', [
                                'title' => 'Latte',
                                'description' => 'Smooth espresso blended with creamy milk',
                                'price' => '₱150',
                                'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Caffe_Latte_at_Pulse_Cafe.jpg'
                            ])?>
                        </div>

                        <!-- This Week -->
                        <div class="p-4 color-light-cappuccino rounded-xl shadow">
                            <h3 class="text-xl text-center text-color-dark-espresso font-semibold mb-4">
                                Most Sold Item This Week
                            </h3>
                            <?= view('components/cards/card', [
                                'title' => 'Espresso',
                                'description' => 'Strong and bold, perfect for coffee lovers',
                                'price' => '₱120',
                                'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                            ])?>
                        </div>

                        <!-- This Month -->
                        <div class="p-4 color-light-cappuccino rounded-xl shadow">
                            <h3 class="text-xl text-center text-color-dark-espresso font-semibold mb-4">
                                Most Sold Item This Month
                            </h3>
                            <?= view('components/cards/card', [
                                'title' => 'Mocha',
                                'description' => 'Perfect balance of deep espresso, steamed milk, and rich chocolate',
                                'price' => '₱200',
                                'image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg'
                            ])?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>
</body>
</html>
