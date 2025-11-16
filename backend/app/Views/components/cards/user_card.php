<article class="relative color-light-cappuccino w-3xl rounded-md shadow-md overflow-hidden flex flex-col">
    <div class="absolute inset-0 z-0 bg-[url('/assets/image/Logo.svg')] bg-cover bg-center  mask-l-from-50% mask-l-to-90% opcaity-40"></div>

    <?php if(!empty($image)) : ?>
        <div class="relative z-10 flex justify-start p-4">
            <img src="<?= esc($image) ?>" alt="Profile Picture" class="w-35 h-35 rounded-full object-cover">
        </div>
    <?php endif; ?>
    
    <div class="relative z-20 px-6 pb-5 mt-4">
        <div>
            <h3 class="text-4xl font-bold text-color-dark-espresso">
                <?php if(!empty($first_Name)) : ?>
                    <?= esc($first_Name) ?>
                <?php endif; ?>

                <?php if(!empty($middle_Initial)) : ?>
                    <?= esc($middle_Initial) ?>
                <?php endif; ?>

                <?php if(!empty($last_Name)) : ?>
                   <?= esc($last_Name) ?>
                <?php endif; ?>

                <?php if(!empty($suffix)) : ?>
                   <?= esc($suffix) ?>
                <?php endif; ?>
            </h3>
        
        <?php if(!empty($status)) : ?>
            <div class="mt-4 px-4 py-1 w-3xs mx-auto rounded-full <?= esc($color) ?>">
                <p class="text-base text-gray-100 text-center font-bold"><?= esc($status) ?></p>
            </div>
        <?php endif; ?>
    </div>
</article>