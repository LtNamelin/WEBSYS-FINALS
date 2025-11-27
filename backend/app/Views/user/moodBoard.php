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
                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Primary',
                    'link' => '#'
                ]) ?>

                <?= view('components/buttons/secondary_button', [
                    'btnName' => 'Secondary',
                    'link' => '#'
                ]) ?>

                <?= view('components/buttons/border_button', [
                    'btnName' => 'Border',
                    'link' => '#'
                ]) ?>

                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Disable',
                    'link' => '#',
                    'disable' => true
                ]) ?>
            </div>
        </section>

        <section>
            <h2 class="mb-4 font-bold text-3xl">Buttons - Large</h2>
            <div class="flex flex-wrap gap-4 bg-white shadow p-6 rounded-xl">
                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Primary',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ]) ?>

                <?= view('components/buttons/secondary_button', [
                    'btnName' => 'Secondary',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ]) ?>

                <?= view('components/buttons/border_button', [
                    'btnName' => 'Border',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ]) ?>

                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Disable',
                    'link' => '#',
                    'version' => true,
                    'disable' => true
                ]) ?>
            </div>
        </section>


        <!-- Cards -->
        <section class="space-y-12">
            <h2 class="mb-4 font-bold text-3xl">Card Sample</h2>
            <div class="gap-8 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Sample',
                        'description' => 'Description',
                        'price' => null,
                        'link' => "Link",
                        'status' => null,
                        'color' => null,
                        'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                    ]) ?>
                </div>

                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Sample',
                        'description' => 'Description',
                        'price' => 'Price',
                        'link' => null,
                        'status' => null,
                        'color' => null,
                        'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                    ]) ?>
                </div>

                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Sample',
                        'description' => 'Description',
                        'price' => 'Price',
                        'link' => "Link",
                        'status' => 'Status',
                        'color' => 'bg-gray-700',
                        'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                    ]) ?>
                </div>
            </div>

            <h2 class="mb-4 font-bold text-3xl">Highlight Card Sample</h2>
            <div>
                <?= view('components/cards/highlight_Card', [
                    'title' => 'Mocha',
                    'description' => 'Perfect balance of deep espresso, steamed milk, and rich chocolate',
                    'price' => '₱200',
                    'status' => 'Most Bought This Month',
                    'color' => 'color-espresso',
                    'image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg'
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
            <h2 class="mb-4 font-bold text-3xl">Logo</h2>
            <div class="gap-2 grid grid-cols-2">
                <div class="bg-white shadow p-6 rounded-xl">
                    <img src="/assets/image/Logo.svg" alt="MY Coffee Logo" class="mx-auto rounded-full w-50 h-50 object-cover">
                </div>

                <div class="bg-white shadow p-6 rounded-xl">
                    <img src="/assets/image/Logo.svg" alt="MY Coffee Logo" class="mx-auto rounded-lg w-50 h-50 object-contain">
                </div>
            </div>
        </section>
    </div>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>