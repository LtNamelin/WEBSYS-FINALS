<?= view('components/head', ['title' => 'Products | Café de Lumière']) ?>

<body class="text-black color-light-latte">

    <?= view('components/header') ?>

    <main class="space-y-16 mx-auto py-16 max-w-7xl">

        <!-- Success message -->
        <?php if (session()->getFlashdata('message')): ?>
            <p class="mb-8 font-semibold text-green-600 text-center success-message">
                <?= session()->getFlashdata('message') ?>
            </p>
        <?php endif; ?>

        <!-- Products Grid -->
        <section class="shadow p-10 rounded-xl text-black color-light-latte">
            <h2 class="mb-10 font-bold text-color-dark-espresso text-4xl text-center">Our Products</h2>

            <div class="gap-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">

                <?php foreach ($products as $p): ?>
                    <?= view('components/cards/card', [
                        'title' => $p->name,
                        'description' => $p->description,
                        'price' => '₱' . number_format($p->price, 2),
                        'image' => $p->image ? '/uploads/' . $p->image : 'https://via.placeholder.com/300x200?text=No+Image'
                    ]) ?>
                <?php endforeach; ?>

            </div>
        </section>

    </main>

    <?= view('components/footer') ?>

</body>

</html>