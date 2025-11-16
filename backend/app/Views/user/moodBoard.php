<!DOCTYPE html>
<html lang="en">
    
    <?= view('components/head', [
        'title' => 'My Coffee | Mood Board'
    ])?>

    <body class="bg-[#f5f2ef] text-color-dark-espresso">

        <!-- NavBar -->
        <?= view('components/header') ?>

    <div class="max-w-6xl mx-auto py-12 px-6 space-y-12">
        <!-- Title -->
        <h1 class="text-5xl font-bold text-center mb-8">My Coffee Mood Board</h1>

        <!-- Color Palette -->
        <section>
        <h2 class="text-3xl font-bold mb-4">Color Palette</h2>
        <div class="grid grid-cols-3 gap-4">
            <div class="flex flex-col gap-4">
                <div class="h-24 rounded-lg color-dark-espresso flex items-center justify-center text-white">#4E342E</div>
                <div class="h-24 rounded-lg color-espresso flex items-center justify-center text-white">#6F5853</div>
                <div class="h-24 rounded-lg color-light-espresso flex items-center justify-center text-black">#917F7B</div>
            </div>

            <div class="flex flex-col gap-4">
                <div class="h-24 rounded-lg color-dark-cappuccino flex items-center justify-center text-white">#A67B5B</div>
                <div class="h-24 rounded-lg color-cappuccino flex items-center justify-center text-black">#B8947B</div>
                <div class="h-24 rounded-lg color-light-cappuccino flex items-center justify-center text-black">#CAAE9B</div>
            </div>
            
            <div class="flex flex-col gap-4">
                <div class="h-24 rounded-lg color-dark-latte flex items-center justify-center text-black">#DCC9BB</div>
                <div class="h-24 rounded-lg color-latte flex items-center justify-center text-black">#E5D6CC</div>
                <div class="h-24 rounded-lg color-light-latte flex items-center justify-center text-black">#EDE4DD</div>
            </div>
        </div>
        </section>

        <!-- Typography -->
        <section>
        <h2 class="text-3xl font-bold mb-4">Typography</h2>
        <div class="space-y-4 p-6 bg-white rounded-xl shadow">
            <p class="text-4xl font-bold">Heading Font – Bold & Warm</p>
            <p class="text-base">Body Font – Easy to read, clean, and modern.</p>
        </div>
        </section>

        <!-- Buttons -->
        <section>
            <h2 class="text-3xl font-bold mb-4">Buttons - Base</h2>
            <div class="flex flex-wrap gap-4 bg-white p-6 rounded-xl shadow">
                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Primary',
                    'link' => '#'
                ])?>

                <?= view('components/buttons/secondary_button', [
                    'btnName' => 'Secondary',
                    'link' => '#'
                ])?> 
                
                <?= view('components/buttons/border_button', [
                    'btnName' => 'Border',
                    'link' => '#'
                ])?>

                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Disable',
                    'link' => '#',
                    'disable' => true
                ])?>
            </div>
        </section>

        <section>
            <h2 class="text-3xl font-bold mb-4">Buttons - Large</h2>
            <div class="flex flex-wrap gap-4 bg-white p-6 rounded-xl shadow">
                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Primary',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ])?>

                <?= view('components/buttons/secondary_button', [
                    'btnName' => 'Secondary',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ])?> 
                
                <?= view('components/buttons/border_button', [
                    'btnName' => 'Border',
                    'disable' => false,
                    'version' => true,
                    'link' => '#'
                ])?>

                <?= view('components/buttons/primary_button', [
                    'btnName' => 'Disable',
                    'link' => '#',
                    'version' => true,
                    'disable' => true
                ])?>
            </div>
        </section>


        <!-- Cards -->
        <section class="space-y-12">
            <h2 class="text-3xl font-bold mb-4">Card Sample</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div>
                    <?= view('components/cards/card', [
                        'title' => 'Sample',
                        'description' => 'Description',
                        'price' => null,
                        'link' => "Link",
                        'status' => null,
                        'color' => null,
                        'image' => 'https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/what-is-espresso-765702-hero-03_cropped-ffbc0c7cf45a46ff846843040c8f370c.jpg'
                    ])?>
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
                    ])?>
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
                    ])?>
                </div>
            </div> 
            
                <h2 class="text-3xl font-bold mb-4">Highlight Card Sample</h2>
                <div>
                    <?= view('components/cards/highlight_Card', [
                        'title' => 'Mocha',
                        'description' => 'Perfect balance of deep espresso, steamed milk, and rich chocolate',
                        'price' => '₱200',
                        'status' => 'Most Bought This Month',
                        'color' => 'color-espresso',
                        'image' => 'https://www.folgerscoffee.com/folgers/recipes/_Hero%20Images/Detail%20Pages/5598/image-thumb__5598__schema_image/MochaIced-hero.58f3878d.jpg'
                    ])?>
                </div>

                
                <h2 class="text-3xl font-bold mb-4">User Card Sample</h2>
                <div>
                    <?= view('components/cards/user_card', [
                        'first_Name' => 'John',
                        'middle_Initial' => null,
                        'last_Name' => 'Doe',
                        'suffix' => null,
                        'status' => 'Regular Member',
                        'color' => 'color-dark-espresso',
                        'image' => 'https://i.pinimg.com/236x/dd/f0/11/ddf0110aa19f445687b737679eec9cb2.jpg'
                    ])?>
                </div>

        </section>

        <!-- Logo -->
        <section>
        <h2 class="text-3xl font-bold mb-4">Logo</h2>
        <div class="grid grid-cols-2 gap-2">
            <div class="bg-white p-6 rounded-xl shadow">
            <img src="/assets/image/Logo.svg" alt="MY Coffee Logo" class=" w-50 h-50 rounded-full object-cover mx-auto">
            </div>

            <div class="bg-white p-6 rounded-xl shadow">
            <img src="/assets/image/Logo.svg" alt="MY Coffee Logo" class=" w-50 h-50 rounded-lg object-contain mx-auto">
            </div>
        </div>
        </section>
    </div>

        <!-- Footer -->
        <?= view('components/footer') ?>

    </body>
</html>
