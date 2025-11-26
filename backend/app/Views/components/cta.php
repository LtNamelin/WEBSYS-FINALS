<section class="mx-8 my-8 color-dark-latte rounded-xl shadow">
    <div class="py-10 text-center">
        <?php if (!empty($heading)): ?>
            <h1 class="text-9xl font-bold text-black text-center"> <?= esc($heading) ?></h1>
        <?php endif; ?>

         <?php if (!empty($subhead)): ?>
            <h2 class="text-6xl font-bold mt-3 mb-3 text-white text-center"> <?= esc($subhead) ?></h2>
        <?php endif; ?>

        <div class="flex justify-center py-8 gap-4">
            <?php if (!empty($primary_button)): ?>
                <?= view('components/buttons/primary_button', [
                    'btnName' => $primary_button['btnName'],
                    'link' => $primary_button['link']
                ])?>
             <?php endif; ?>

            <?php if (!empty($secondary_button)): ?>
                <?= view('components/buttons/secondary_button', [
                    'btnName' => $secondary_button['btnName'],
                    'link' => $secondary_button['link'],
                    'version' => $secondary_button['version']
                ])?>
             <?php endif; ?>
        </div>
    </div>
</section>