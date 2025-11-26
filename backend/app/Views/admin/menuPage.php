<!DOCTYPE html>
<html>

<?= view('components/head', [
    'title' => 'Products'
]) ?>

<body class="text-white color-espresso">

    <!-- NavBar -->
    <?= view('components/header') ?>

    <main class="space-y-12 py-10">

        <!-- Product List Section -->
        <section class="shadow mx-auto p-10 rounded-xl max-w-7xl color-dark-latte">
            <h2 class="mb-8 font-bold text-color-dark-espresso text-4xl text-center"> Products </h2>

            <div class="place-items-center gap-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">

                <?php foreach ($products as $p): ?>
                    <?= view('components/cards/highlight_Card', [
                        'title' => $p->name,
                        'description' => $p->description,
                        'price' => '₱' . number_format($p->price, 2),
                        'status' => $p->is_available ? 'Available' : 'Unavailable',
                        'color' => 'color-espresso',
                        'image' => $p->image ? '/uploads/' . $p->image : 'https://via.placeholder.com/300'
                    ]) ?>
                <?php endforeach; ?>

            </div>
        </section>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>