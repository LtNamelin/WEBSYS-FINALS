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
            <?php $subtotal = 0; ?>
            <div class="space-y-6">
                <?php if (!empty($cartItems)): ?>
                    <?php
                    $subtotal = 0;
                    foreach ($cartItems as $item):
                        $price = $item['price'];
                        $quantity = $item['quantity'];
                        $itemTotal = $price * $quantity;
                        $subtotal += $itemTotal;
                    ?>
                        <div class="flex justify-between items-center pb-4 border-b">
                            <div class="flex items-center gap-4">
                                <img src="<?= esc($item['product_image']) ?>" class="rounded-lg w-20 h-20 object-cover">
                                <div>
                                    <h3 class="font-bold text-color-dark-espresso text-xl"><?= esc($item['product_name']) ?></h3>
                                    <p class="text-gray-700 text-sm"><?= esc($item['product_description']) ?></p>
                                </div>
                            </div>

                            <div class="flex items-center gap-3">
                                <form action="<?= site_url('cart/decrease/' . $item['id']) ?>" method="post">
                                    <button type="submit" class="bg-gray-300 px-3 py-1 rounded">-</button>
                                </form>
                                <span class="font-bold"><?= esc($quantity) ?></span>
                                <form action="<?= site_url('cart/increase/' . $item['id']) ?>" method="post">
                                    <button type="submit" class="bg-gray-300 px-3 py-1 rounded">+</button>
                                </form>
                            </div>

                            <p class="font-bold text-color-dark-espresso">₱<?= number_format($itemTotal, 2) ?></p>

                            <form action="<?= site_url('cart/remove/' . $item['id']) ?>" method="post" class="ml-4">
                                <button type="submit" class="font-bold text-red-600">Remove</button>
                            </form>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p class="text-gray-700 text-center">Your cart is empty.</p>
                <?php endif; ?>
            </div>
        </section>

        <!-- Summary -->
        <aside class="shadow p-8 rounded-xl h-fit text-black color-dark-latte">

            <h2 class="mb-8 font-bold text-color-dark-espresso text-3xl text-center">Order Summary</h2>

            <?php
            $tax = !empty($subtotal) ? $subtotal * 0.05 : 0;
            $total = $subtotal + $tax;
            ?>

            <div class="space-y-4 text-lg">
                <div class="flex justify-between">
                    <span>Subtotal</span>
                    <span>₱<?= number_format($subtotal, 2) ?></span>
                </div>

                <div class="flex justify-between">
                    <span>Tax (5%)</span>
                    <span>₱<?= number_format($tax, 2) ?></span>
                </div>

                <div class="flex justify-between pt-4 border-t font-bold text-color-dark-espresso text-xl">
                    <span>Total</span>
                    <span>₱<?= number_format($total, 2) ?></span>
                </div>
            </div>

            <form action="<?= site_url('cart/checkout') ?>" method="post">
                <button type="submit" class="bg-color-dark-espresso mt-10 py-3 rounded-lg w-full font-bold hover-primary">
                    Proceed to Checkout
                </button>
            </form>

            <a href="/" class="block mt-4 text-color-dark-espresso text-center underline">Continue Shopping</a>
        </aside>

    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>