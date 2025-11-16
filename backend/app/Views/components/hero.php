<section class="mx-8 my-8 color-dark-cappuccino rounded-xl shadow">
    <div class="py-10 text-center">
        <?php if (!empty($heading)): ?>
            <h1 class="text-9xl font-bold text-white text-center"> <?= esc($heading) ?></h1>
        <?php endif; ?>

         <?php if (!empty($subHeading)): ?>
            <h2 class="text-6xl font-bold mt-3 mb-3 text-white text-center"> <?= esc($subHeading) ?></h2>
        <?php endif; ?>
    </div>
</section>