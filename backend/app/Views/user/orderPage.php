<!DOCTYPE html>
<html>

<?= view('components/head', [
    'title' => 'My Coffee | Order'
]) ?>

<body class="text-white color-espresso">

    <!-- Header -->
    <?= view('components/header') ?>

    <!-- Hero -->
    <?= view('components/hero', [
        'heading' => 'Your Order',
        'subHeading' => 'Review your items before checking out'
    ]) ?>

    <main class="gap-10 grid grid-cols-1 md:grid-cols-3 mx-auto py-12 max-w-7xl">

        <!-- Cart Items -->
        <section class="md:col-span-2 shadow p-8 rounded-xl text-black color-light-latte">

            <h2 class="mb-8 font-bold text-color-dark-espresso text-3xl text-center">Items in Cart</h2>

            <div class="space-y-6">

                <!-- Sample Cart Item -->
                <div class="flex justify-between items-center pb-4 border-b">
                    <div class="flex items-center gap-4">
                        <img src="https://www.thespruceeats.com/thmb/HJrjMfXdLGHbgMhnM0fMkDx9XPQ=/1500x0" class="rounded-lg w-20 h-20 object-cover">
                        <div>
                            <h3 class="font-bold text-color-dark-espresso text-xl">Espresso</h3>
                            <p class="text-gray-700 text-sm">Strong and bold</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <button class="bg-gray-300 px-3 py-1 rounded">-</button>
                        <span class="font-bold">1</span>
                        <button class="bg-gray-300 px-3 py-1 rounded">+</button>
                    </div>

                    <p class="font-bold text-color-dark-espresso">₱120</p>
                </div>

                <!-- Another Item -->
                <div class="flex justify-between items-center pb-4 border-b">
                    <div class="flex items-center gap-4">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/Cappuccino_in_original.jpg" class="rounded-lg w-20 h-20 object-cover">
                        <div>
                            <h3 class="font-bold text-color-dark-espresso text-xl">Cappuccino</h3>
                            <p class="text-gray-700 text-sm">Perfect blend</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <button class="bg-gray-300 px-3 py-1 rounded">-</button>
                        <span class="font-bold">2</span>
                        <button class="bg-gray-300 px-3 py-1 rounded">+</button>
                    </div>

                    <p class="font-bold text-color-dark-espresso">₱280</p>
                </div>

            </div>
        </section>

        <!-- Summary -->
        <aside class="shadow p-8 rounded-xl h-fit text-black color-dark-latte">

            <h2 class="mb-8 font-bold text-color-dark-espresso text-3xl text-center">Order Summary</h2>

            <div class="space-y-4 text-lg">
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>₱400</span>
                </div>

                <div class="flex justify-between">
                    <span>Tax (5%)</span>
                    <span>₱20</span>
                </div>

                <div class="flex justify-between pt-4 border-t font-bold text-color-dark-espresso text-xl">
                    <span>Total</span>
                    <span>₱420</span>
                </div>
            </div>

            <button class="bg-color-dark-espresso mt-10 py-3 rounded-lg w-full font-bold text-white hover-primary">
                Proceed to Checkout
            </button>

            <a href="/" class="block mt-4 text-color-dark-espresso text-center underline">Continue Shopping</a>

        </aside>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>