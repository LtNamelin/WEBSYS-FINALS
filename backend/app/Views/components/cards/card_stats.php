<div class="color-light-latte rounded-lg shadow p-4">
    <div>
        <?php if(!empty($title)) : ?>
            <h3 class="text-xl font-bold text-color-dark-espresso"><?= esc($title) ?></h3>
        <?php endif; ?>

        <?php if(!empty($value)) : ?>
            <p class="text-gray-600 text-2xl font-bold"><?= esc($value) ?></p>
         <?php endif; ?>
    </div>
        
    <?php if(!empty($subtitle)) : ?>
            <p class="mt-1 text-base text-gray-100"><?= esc($subtitle) ?></p>
    <?php endif; ?>
</div>
