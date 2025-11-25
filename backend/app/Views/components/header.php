<link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/header.css') ?>">
<body>
    <header>
        <div class="colorblock"></div>
        <div class="bg-white shadow-md w-full">
            <nav>
                <div class="container mx-20px px-4 flex items-center justify-center h-35">
                    <div class="hidden md:flex space-x-6 font-bold">
                        <a href="/" class="btn">Home</a>
                        <a href="/menuPage" class="btn">Menu</a>
                        <a href="/" class="title">Café</a>
                        <a href="/" class="title">de</a>
                        <a href="/" class="title">Lumière</a>
                        <a href="#" class="btn">Reserve</a>
                        <?php if(session()->has('user')): ?>
                            <a href="/logout" class="btn">Logout</a>
                        <?php else: ?>
                            <a href="/loginPage" class="btn">Login</a>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </div>
    </header>
