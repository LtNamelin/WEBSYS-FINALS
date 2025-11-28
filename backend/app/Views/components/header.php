<?php $session = session(); ?>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">

<body>
    <header>
        <div class="colorblock"></div>
        <div class="bg-white shadow-md w-full">
            <nav>
                <div class="flex justify-center items-center mx-20px px-4 h-35 nav-container">
                    <div class="hidden md:flex space-x-6 font-bold">
                        <a href="/" class="btn">Home</a>
                        <a href="/menuPage" class="btn">Menu</a>
                        <a href="/" class="title">Café</a>
                        <a href="/" class="title">de</a>
                        <a href="/" class="title">Lumière</a>
                        <a href="/cart" class="btn">Order</a>

                        <?php if ($session->has('user')): ?>
                            <?php $type = $session->get('user')['type'] ?? ''; ?>

                            <?php if ($type === 'admin' || $type === 'manager'): ?>
                                <a href="/admin/dashboard" class="btn">Dashboard</a>
                            <?php elseif ($type === 'regular_client'): ?>
                                <a href="/order" class="btn">Your Orders</a>
                            <?php endif; ?>

                            <!-- Profile link visible for all logged-in users -->
                            <a href="/userProfile" class="btn">Profile</a>
                            <a href="/logout" class="btn">Logout</a>
                        <?php else: ?>
                            <a href="/loginPage" class="btn">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</body>