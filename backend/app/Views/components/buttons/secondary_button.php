<?php if(($version ?? false) && ($disable ?? false)): ?>
    <a href="<?= esc($link ?? '#') ?>" class="opacity-50 px-12 py-5 rounded-lg font-bold text-2xl text-white bg-gray-600 pointer-events-none">
        <?= esc($btnName ?? 'Action')?>
    </a>
<?php elseif($disable ?? false): ?>
    <a href="<?= esc($link ?? '#') ?>" class="opacity-50 px-6 py-2 rounded-lg font-bold text-white bg-gray-600 pointer-events-none">
        <?= esc($btnName ?? 'Action')?>
    </a>
<?php elseif($version ?? false): ?>
    <a href="<?= esc($link ?? '#') ?>" class="px-12 py-5 rounded-lg font-bold text-2xl text-white color-dark-cappuccino hover-secondary cursor-pointer">
        <?= esc($btnName ?? 'Action')?>
    </a>
<?php else: ?>
    <a href="<?= esc($link ?? '#') ?>" class="px-6 py-2 rounded-lg font-bold text-white color-dark-cappuccino hover-secondary cursor-pointer">
        <?= esc($btnName ?? 'Action')?>
    </a>
<?php endif; ?>