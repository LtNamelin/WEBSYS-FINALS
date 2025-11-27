<!DOCTYPE html>
<html>

<?= view('components/head', [
    'title' => 'Café de Lumière'
]) ?>

<body class="text-white color-espresso">
    <!-- NavBar -->
    <?= view('components/header') ?>

    <!-- Hero -->
    <?= view('components/hero', [
        'line' => 'null',
        'heading' => 'ᴛʜᴇ ᴄᴀꜰᴇ ᴛʜᴀᴛ ᴍᴀᴋᴇꜱ ʏᴏᴜ ꜰᴇᴇʟ ᴄʟᴏꜱᴇʀ ᴛᴏ ʜᴇᴀᴠᴇɴ',
        'subHeading' => 'A taste crafted for the gods.',
        'button' => 'null',
    ]) ?>

    <main class="space-y-12 py-10">

        <!-- Popular section -->
        <section class="shadow mx-auto p-10 rounded-xl max-w-7xl color-dark-latte">
            <h2 class="mb-8 font-bold text-color-dark-espresso text-4xl text-center"> Popular </h2>

            <div class="place-items-center gap-8 grid grid-cols-2">
                <?= view('components/cards/highlight_Card', [
                    'title' => 'Espresso',
                    'description' => 'Strong and bold, perfect for coffee lovers',
                    'price' => '₱120',
                    'status' => 'Most Bought This Week',
                    'color' => 'color-espresso',
                    'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                ]) ?>

                <?= view('components/cards/highlight_Card', [
                    'title' => 'Cappuccino',
                    'description' => 'Perfect balance of espresso and frothy foam',
                    'price' => '₱140',
                    'status' => 'Most Bought This Week',
                    'color' => 'color-espresso',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Cappuccino_in_original.jpg/1200px-Cappuccino_in_original.jpg'
                ]) ?>

                <?= view('components/cards/highlight_Card', [
                    'title' => 'Latte',
                    'description' => 'Smooth espresso blended with creamy milk',
                    'price' => '₱150',
                    'status' => 'Most Bought Today',
                    'color' => 'color-espresso',
                    'image' => 'https://upload.wikimedia.org/wikipedia/commons/d/d8/Caffe_Latte_at_Pulse_Cafe.jpg'
                ]) ?>

                <?= view('components/cards/highlight_Card', [
                    'title' => 'Mocha',
                    'description' => 'Perfect balance of deep espresso, steamed milk, and rich chocolate',
                    'price' => '₱200',
                    'status' => 'Most Bought This Month',
                    'color' => 'color-espresso',
                    'image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg'
                ]) ?>
            </div>
        </section>

        <!-- Services Section -->
        <section class="shadow mx-auto p-10 rounded-xl max-w-7xl text-black color-dark-latte">
            <h2 class="mb-8 font-bold text-color-dark-espresso text-4xl text-center"> Services </h2>

            <div class="gap-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <?= view('components/cards/card', [
                    'title' => 'Quality Services',
                    'description' => 'We provide quality services in-store or online',
                    'link' => 'Read More',
                    'price' => null,
                    'status' => null,
                    'color' => null,
                    'image' => 'https://coffeehero.com.au/cdn/shop/articles/eeddbac154dbaa57571a2012fc3dabd4_2048x2048.jpg?v=1634952384'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Quality Beans',
                    'description' => 'We only acquire and use the best beans for your coffee',
                    'link' => 'Read More',
                    'price' => null,
                    'status' => null,
                    'color' => null,
                    'image' => 'https://www.orientalkopi.asia/wp-content/uploads/2024/03/types-of-coffee-beans-in-malaysia-featured.jpeg'
                ]) ?>

                <?= view('components/cards/card', [
                    'title' => 'Fresh Pastry',
                    'description' => 'Pick from freshly baked pastry from our partnered Pastry shop',
                    'link' => 'Read More',
                    'price' => null,
                    'status' => null,
                    'color' => null,
                    'image' => 'https://images.squarespace-cdn.com/content/v1/5d2ca1d3fab90a000155e743/1585080034457-ZQ5QBVCNLCIVHN9QXDR0/IMG_1366+%281%29.jpeg?format=2500w'
                ]) ?>
            </div>
        </section>

        <!-- CTA -->
        <?= view('components/cta', [
            'heading' => 'Fresh Coffee Every Day With My Coffee',
            'subhead' => 'Start your morning right with a cup brewed just for you',
            'primary_button' => null,
            'secondary_button' => ['btnName' => 'Order Now', 'version' => true, 'link' => '#']
        ]) ?>
    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>