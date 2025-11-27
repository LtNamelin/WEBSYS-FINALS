<!DOCTYPE html>
<html lang="en">

<?= view('components/head', [
    'title' => 'Divine Europe | Mood Board'
]) ?>

<body class="bg-[#f5f2ef] text-color-dark-espresso">

    <!-- NavBar -->
    <?= view('components/header') ?>

    <div class="space-y-12 mx-auto px-6 py-12 max-w-6xl">
        <!-- Title -->
        <h1 class="mb-8 font-bold text-5xl text-center">Divine Europe Mood Board</h1>

        <!-- Color Palette -->
        <section>
            <h2 class="mb-4 font-bold text-3xl">Color Palette</h2>

            <div class="gap-4 grid grid-cols-3">

                <!-- Column 1 -->
                <div class="flex flex-col gap-4">
                    <div class="flex justify-center items-center rounded-lg h-24 text-black" style="background:#FFD700">
                        #FFD700
                    </div>
                    <div class="flex justify-center items-center border rounded-lg h-24 text-black" style="background:#FFFFFF">
                        #FFFFFF
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="flex flex-col gap-4">
                    <div class="flex justify-center items-center rounded-lg h-24 text-white" style="background:#55595E">
                        #55595E
                    </div>
                    <div class="flex justify-center items-center rounded-lg h-24 text-white" style="background:#00C34B">
                        #00C34B
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="flex flex-col gap-4">
                    <div class="flex justify-center items-center rounded-lg h-24 text-white" style="background:#B81507">
                        #B81507
                    </div>
                </div>

            </div>
        </section>


        <!-- Typography -->
        <section>
            <h2 class="mb-4 font-bold text-3xl">Typography</h2>
            <div class="space-y-4 bg-white shadow p-6 rounded-xl">
                <p class="font-bold text-4xl">Heading Font – Bold & Warm</p>
                <p class="text-base">Body Font – Easy to read, clean, and modern.</p>
            </div>
        </section>

        <!-- Buttons -->
        <section>
            <h2 class="mb-4 font-bold text-3xl">Buttons - Base</h2>
            <div class="flex flex-wrap gap-4 bg-white shadow p-6 rounded-xl">

                <!-- Base Primary (Gold) -->
                <a href="#"
                    class="bg-[#FFD700] hover:bg-[#e6c200] px-6 py-2 rounded-lg font-semibold text-[#55595E] transition">
                    Primary
                </a>

                <!-- Base Secondary (Gray) -->
                <a href="#"
                    class="bg-[#55595E] hover:bg-[#3d4044] px-6 py-2 rounded-lg font-semibold text-white transition">
                    Secondary
                </a>

                <!-- Base Border (Gold border, white bg) -->
                <a href="#"
                    class="bg-white hover:bg-[#fff7cc] px-6 py-2 border border-[#FFD700] rounded-lg font-semibold text-[#55595E] transition">
                    Border
                </a>

            </div>
        </section>


        <section>
            <h2 class="mb-4 font-bold text-3xl">Buttons - Large</h2>
            <div class="flex flex-wrap gap-4 bg-white shadow p-6 rounded-xl">

                <!-- Large Primary (Deep Red premium look) -->
                <a href="#"
                    class="bg-[#B81507] hover:bg-[#8e1006] px-8 py-4 rounded-xl font-bold text-white text-lg transition">
                    Primary
                </a>

                <!-- Large Secondary (Premium Gray) -->
                <a href="#"
                    class="bg-[#55595E] hover:bg-[#3d4044] px-8 py-4 rounded-xl font-bold text-white text-lg transition">
                    Secondary
                </a>

                <!-- Large Border (Green for accent) -->
                <a href="#"
                    class="hover:bg-[#e6ffe6] px-8 py-4 border-[#00C34B] border-2 rounded-xl font-bold text-[#00C34B] text-lg transition">
                    Border
                </a>

            </div>
        </section>




        <!-- Cards -->
        <section class="space-y-12">
            <h2 class="mb-4 font-europe-heading font-bold text-3xl">Card Sample</h2>

            <div class="gap-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">

                <!-- Card 1 -->
                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Espresso Classico',
                        'description' => 'Rich, bold European espresso with deep crema.',
                        'price' => null,
                        'link' => "Order",
                        'status' => null,
                        'color' => null,
                        'image' => 'https://upload.wikimedia.org/wikipedia/commons/4/45/A_small_cup_of_coffee.JPG'
                    ]) ?>
                </div>

                <!-- Card 2 -->
                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Cortado',
                        'description' => 'Spanish-style espresso cut with warm milk for a silky, mellow taste.',
                        'price' => '₱190',
                        'link' => null,
                        'status' => null,
                        'color' => null,
                        'image' => 'https://cdn.shopify.com/s/files/1/0801/7530/0936/files/WK_Social_10062022_4_2048x2048.png?v=1711995048'
                    ]) ?>
                </div>

                <!-- Card 3 -->
                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Caffè Romano',
                        'description' => 'Italian espresso served with zest of lemon.',
                        'price' => '₱160',
                        'link' => "Details",
                        'status' => 'Popular',
                        'color' => 'bg-gray-700',
                        'image' => 'https://cornercoffeestore.com/wp-content/uploads/2022/10/espresso-romano-coffee-serve-with-lemon_Darunee-komkuntood_Shutterstock.jpg'
                    ]) ?>
                </div>

            </div>


            <h2 class="mb-4 font-bold text-3xl">Highlight Card Sample</h2>
            <div>
                <?= view('components/cards/highlight_Card', [
                    'title' => 'Royal Cappuccino',
                    'description' => 'Silky European foam crowned with cocoa — a royal treat.',
                    'price' => '₱220',
                    'status' => 'Featured Drink',
                    'color' => 'color-espresso',
                    'image' => 'https://guentercoffee.com/cdn/shop/articles/anleitung-cappuccino-blogheader.jpg?v=1758119315&width=1440'
                ]) ?>

            </div>


            <h2 class="mb-4 font-bold text-3xl">User Card Sample</h2>
            <div>
                <?= view('components/cards/user_card', [
                    'first_Name' => 'John',
                    'middle_Initial' => null,
                    'last_Name' => 'Doe',
                    'suffix' => null,
                    'status' => 'Regular Member',
                    'color' => 'color-dark-espresso',
                    'image' => 'https://i.pinimg.com/236x/dd/f0/11/ddf0110aa19f445687b737679eec9cb2.jpg'
                ]) ?>
            </div>

        </section>

        <!-- Logo -->
        <section>
            <h2 class="mb-4 font-europe-heading font-bold text-3xl">Logo</h2>

            <div class="gap-2 grid grid-cols-2">

                <div class="bg-white shadow-xl p-6 border border-[#FFD700]/40 rounded-xl">
                    <img src="/assets/image/Logo.svg"
                        class="drop-shadow-xl mx-auto rounded-full w-40 h-40 object-cover">
                </div>

                <div class="bg-white shadow-xl p-6 border border-[#FFD700]/40 rounded-xl">
                    <img src="/assets/image/Logo.svg"
                        class="mx-auto rounded-lg w-40 h-40 object-contain">
                </div>

            </div>
        </section>

        <!-- Footer -->
        <?= view('components/footer') ?>

</body>

</html>