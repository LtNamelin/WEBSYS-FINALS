<header>
    <nav class="color-dark-espresso shadow sticky top-0 z-50">
        <div class="w-max-xl mx-auto px-4 flex items-center justify-between h-40">
            <a href="/" class="flex-shrink-0 font-bold text-white text-2xl"> 
                <img src="/assets/image/Logo.svg" alt="MY Coffee Logo" class=" w-32 h-32 rounded-full object-cover">
            </a>
            <div class="hidden md:flex space-x-6 font-bold text-lg">
                <a href="/menuPage" class="text-[30px] text-white"> Products </a>
                <a href="#" class="text-[30px] text-white"> Cart </a>
                <?php if(session()->has('user')): ?>
                    <a href="/logout" class="text-[30px] text-white"> Logout </a>
                <?php else: ?>
                    <a href="/loginPage" class="text-[30px] text-white"> Login </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>