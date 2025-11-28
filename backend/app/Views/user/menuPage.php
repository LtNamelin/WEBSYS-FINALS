<!DOCTYPE html>
<html>

<?= view('components/head', ['title' => 'Menu | Café de Lumière']) ?>

<body class="text-white color-espresso">

    <!-- Header -->
    <?= view('components/header') ?>

    <!-- Hero Section -->
    <?= view('components/hero', [
        'line' => 'null',
        'heading' => 'ᴏᴜʀ ᴍᴇɴᴜ',
        'subHeading' => 'Choose from our freshly brewed coffee selection',
        'button' => null
    ]) ?>

    <main class="space-y-16 mx-auto py-16 max-w-7xl">

        <!-- Coffee Menu -->
        <section class="shadow p-10 rounded-xl text-black color-light-latte">
            <h2 class="mb-10 font-bold text-color-dark-espresso text-4xl text-center">Coffee</h2>
            <div class="gap-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <?php foreach ($coffeeProducts as $coffee) : ?>
                    <div class="flex flex-col">
                        <?= view('components/cards/card', [
                            'title' => $coffee->product_name,
                            'description' =>  $coffee->product_description,
                            'price' =>  $coffee->price,
                            'image' =>  $coffee->product_image,
                        ]) ?>
                        <form action="<?= site_url('/cart/add') ?>" method="post" class="mt-4 px-2">
                            <input type="hidden" name="product_id" value="<?= $coffee->id ?>">
                            <button type="submit" class="px-6 py-2 rounded-lg font-bold text-white color-dark-cappuccino hover-secondary">
                                Add to Order
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Pastries Menu -->
        <section class="shadow p-10 rounded-xl text-black color-light-latte">
            <h2 class="mb-10 font-bold text-color-dark-espresso text-4xl text-center">Pastries</h2>
            <div class="gap-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <?php foreach ($pastryProducts as $pastry) : ?>
                    <div class="flex flex-col">
                        <?= view('components/cards/card', [
                            'title' => $pastry->product_name,
                            'description' =>  $pastry->product_description,
                            'price' =>  $pastry->price,
                            'image' =>  $pastry->product_image,
                        ]) ?>
                        <form action="<?= site_url('/cart/add') ?>" method="post" class="mt-4 px-2">
                            <input type="hidden" name="product_id" value="<?= $pastry->id ?>">
                            <button type="submit" class="px-6 py-2 rounded-lg font-bold text-white color-dark-cappuccino hover-secondary">
                                Add to Order
                            </button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>