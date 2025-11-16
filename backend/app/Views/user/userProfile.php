<!DOCTYPE html>
<html>
    <?= view('components/head', [
        'title' => 'My Coffee | Profile'
    ])?>
    <body class="color-dark-latte">

        <!-- NavBar -->
        <?= view('components/header') ?>

        <main class="py-10 mx-8">
            <section class="p-6 color-light-cappuccino rounded-xl shadow max-w-2xl mx-auto">
                <h2 class="text-3xl text-center font-bold text-color-dark-espresso mb-6">My Profile</h2>

                <div class="flex flex-col items-center space-y-6">
                    <!-- Profile Image -->
                    <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png" alt="Profile Image" class="w-32 h-32 rounded-full shadow">

                    <!-- User Info -->
                    <div class="text-center">
                        <h3 class="text-xl font-semibold text-color-dark-espresso">Juan Dela Cruz</h3>
                        <p class="text-color-espresso-light">juan.delacruz@example.com</p>
                    </div>

                    <!-- Info Fields -->
                    <div class="w-full space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-color-dark-espresso mb-1">First Name</label>
                            <input type="text" value="Juan" class="w-full rounded-lg p-2 border border-gray-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-color-dark-espresso mb-1">Middle Name</label>
                            <input type="text" value="Dela" class="w-full rounded-lg p-2 border border-gray-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-color-dark-espresso mb-1">Last Name</label>
                            <input type="text" value="Cruz" class="w-full rounded-lg p-2 border border-gray-300">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-color-dark-espresso mb-1">Email Address</label>
                            <input type="email" value="juan.delacruz@example.com" class="w-full rounded-lg p-2 border border-gray-300">
                        </div>
                    </div>

                    <!-- Button -->
                    <div class="pt-4">
                        <?= view('components/buttons/primary_button', [
                            'btnName' => 'Save Changes',
                            'disable' => false,
                            'version' => false,
                            'link' => '#'
                        ])?>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <?= view('components/footer') ?>

    </body>
</html>
