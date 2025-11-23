<header class="top-0 left-0 z-50 fixed bg-[#4E342E] shadow-md w-full">
    <div class="flex justify-between items-center mx-auto px-6 py-4 max-w-6xl">

        <!-- Logo -->
        <a href="<?= base_url('landing') ?>" class="font-bold text-white text-2xl">
            Café Aroma
        </a>

        <!-- Navigation -->
        <nav>
            <ul class="flex space-x-6 font-semibold text-white">

                <li><a href="<?= base_url('landing') ?>" class="hover:text-yellow-500">Home</a></li>

                <li><a href="<?= base_url('userProfile') ?>" class="hover:text-yellow-500">Profile</a></li>

                <li><a href="<?= base_url('loginPage') ?>" class="hover:text-yellow-500">Login</a></li>

                <li><a href="<?= base_url('signupPage') ?>" class="hover:text-yellow-500">Sign Up</a></li>

                <!-- ⭐ Cart Button -->
                <li>
                    <a href="<?= base_url('cart') ?>"
                        class="bg-yellow-500 hover:bg-yellow-400 px-4 py-2 rounded-full font-bold text-[#4E342E] transition">
                        🛒 Cart
                    </a>
                </li>

            </ul>
        </nav>

    </div>
</header>