<article class="bg-white rounded-xl shadow-md overflow-hidden transition-all hover:scale-105 hover:shadow-2xl hover:ring-8 hover:ring-[#A67B5B] duration-300 cursor-pointer flex flex-col">
    <?php if(!empty($image)) : ?>
        <img src="<?= esc($image) ?>" alt="<?= esc($title ?? '') ?>" class="w-full rounded-xl h-50 object-cover">
    <?php endif; ?>
    
    <div class="p-5 flex flex-col justify-between flex-1">
        <div>
            <?php if(!empty($title)) : ?>
                <h3 class="text-xl font-bold text-[#4e342e]"><?= esc($title) ?></h3>
            <?php endif; ?>

            <?php if(!empty($description)) : ?>
                <p class="text-gray-600 mt-3 text-base"><?= esc($description) ?></p>
            <?php endif; ?>

            <?php if(!empty($price)) : ?>
                <p class="mt-3 font-bold text-[#4E342E]"><?= esc($price) ?></p>
            <?php endif; ?>

            <?php if(!empty($link)) : ?>
                <a class="mt-2 underline text-blue-600"><?= esc($link) ?></a>
            <?php endif; ?>

            <?php if (!empty($secondary_button)): ?>
                <div class="mt-8">
                    <?= view('components/buttons/secondary_button', [
                        'btnName' => $secondary_button['btnName'],
                        'link' => $secondary_button['link'],
                        'version' => $secondary_button['version']
                    ])?>
                </div>
               
            <?php endif; ?>
        </div>
        
        <?php if(!empty($status)) : ?>
            <div class="mt-4 px-4 py-1 rounded-full <?= esc($color) ?>">
                <p class="text-base text-gray-100 text-center font-bold"><?= esc($status) ?></p>
            </div>
        <?php endif; ?>
    </div>
</article>