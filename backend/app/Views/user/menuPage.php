<!DOCTYPE html>
<html>

<?= view('components/head', ['title' => 'Menu | My Coffee']) ?>

<body class="text-white color-espresso">

    <!-- Header -->
    <?= view('components/header') ?>

    <!-- Hero Section -->
    <?= view('components/hero', [
        'line' => 'null',
        'heading' => 'ᴏᴜʀ ᴍᴇɴᴜ',
        'subHeading' => 'Choose from our freshly brewed coffee selection',
        'button' => 'null'
    ]) ?>

    <main class="space-y-16 mx-auto py-16 max-w-7xl">

        <!-- Coffee Menu -->
        <section class="shadow p-10 rounded-xl text-black color-light-latte">
            <h2 class="mb-10 font-bold text-color-dark-espresso text-4xl text-center">Coffee</h2>

            <div class="gap-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">

                <?= view('components/cards/card', [
                    'title' => 'Espresso',
                    'description' => 'A strong and bold classic shot.',
                    'price' => '₱120',
                    'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Americano',
                    'description' => 'Espresso with hot water for a smooth taste.',
                    'price' => '₱130',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/0/06/Black_coffee_in_a_cup.jpg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Latte',
                    'description' => 'Smooth espresso with creamy steamed milk.',
                    'price' => '₱150',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Caffe_Latte_at_Pulse_Cafe.jpg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Cappuccino',
                    'description' => 'Balanced espresso and frothy milk foam.',
                    'price' => '₱140',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Cappuccino_in_original.jpg/1200px-Cappuccino_in_original.jpg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Mocha',
                    'description' => 'Espresso blended with milk and chocolate.',
                    'price' => '₱200',
                    'image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Caramel Macchiato',
                    'description' => 'Sweet caramel layered with espresso.',
                    'price' => '₱180',
                    'image' => 'https://www.caffesociety.co.uk/assets/recipe-images/caramel-macchiato-small.jpg'
                ]) ?>

            </div>
        </section>

        <!-- Pastries Menu -->
        <section class="shadow p-10 rounded-xl text-black color-light-latte">
            <h2 class="mb-10 font-bold text-color-dark-espresso text-4xl text-center">Pastries</h2>

            <div class="gap-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">

                <?= view('components/cards/card', [
                    'title' => 'Croissant',
                    'description' => 'Buttery, flaky French classic.',
                    'price' => '₱95',
                    'image' => 'https://images.squarespace-cdn.com/content/v1/5d2ca1d3fab90a000155e743/1585080034457-ZQ5QBVCNLCIVHN9QXDR0/IMG_1366+%281%29.jpeg?format=2500w'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Chocolate Muffin',
                    'description' => 'Rich and moist chocolate treat.',
                    'price' => '₱85',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/18/Chocolate_muffin.png'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Cinnamon Roll',
                    'description' => 'Warm roll topped with sweet icing.',
                    'price' => '₱110',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/3/39/Cinnamon_rolls.jpg'
                ]) ?>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>