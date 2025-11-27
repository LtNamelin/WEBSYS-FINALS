<!DOCTYPE html>
<html>
<?= view('components/head', [
    'title' => 'My Coffee | Profile'
]) ?>

<<<<<<< HEAD
<body class="color-dark-latte">
=======
<body class="bg-[#EDE4DD] min-h-screen text-[#4E342E]">
>>>>>>> parent of 4d70c91 (Refactor profile page UI: apply Arceus color palette (gold, white, gray), update buttons, inputs, and headings for a clean celestial theme)

    <!-- Header -->
    <?= view('components/header') ?>

<<<<<<< HEAD
    <main class="mx-8 py-10">
        <section class="shadow mx-auto p-6 rounded-xl max-w-2xl color-light-cappuccino">
            <h2 class="mb-6 font-bold text-color-dark-espresso text-3xl text-center">My Profile</h2>
=======
    <main class="px-4 py-10">
        <section class="bg-[#E5D6CC] shadow mx-auto p-8 border border-[#DCC9BB] rounded-xl max-w-2xl">
>>>>>>> parent of 4d70c91 (Refactor profile page UI: apply Arceus color palette (gold, white, gray), update buttons, inputs, and headings for a clean celestial theme)

            <!-- Title -->
            <h2 class="mb-6 font-bold text-3xl text-center">My Profile</h2>

            <div class="flex flex-col items-center space-y-6">

                <!-- Profile Image -->
                <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png"
                    alt="Profile Image"
                    class="shadow rounded-full w-32 h-32">

                <!-- User Info -->
<<<<<<< HEAD
                <h3 class="font-semibold text-color-dark-espresso text-xl">
                    <?= esc($user->first_name) ?> <?= esc($user->last_name) ?>
                </h3>
                <p class="text-color-espresso-light"><?= esc($user->email) ?></p>
=======
                <div class="text-center">
                    <h3 class="font-semibold text-xl">Juan Dela Cruz</h3>
                    <p class="text-[#6B4F3A]">juan.delacruz@example.com</p>
                </div>
>>>>>>> parent of 4d70c91 (Refactor profile page UI: apply Arceus color palette (gold, white, gray), update buttons, inputs, and headings for a clean celestial theme)

                <!-- Editable Fields -->
                <div class="space-y-4 w-full">
                    <div>
<<<<<<< HEAD
                        <label class="block mb-1 font-medium text-color-dark-espresso text-sm">First Name</label>
                        <input type="text"
                            name="first_name"
                            value="<?= esc($user->first_name) ?>"
                            class="p-2 border border-gray-300 rounded-lg w-full">
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-color-dark-espresso text-sm">Middle Name</label>
                        <input type="text"
                            name="middle_name"
                            value="<?= esc($user->middle_name) ?>"
                            class="p-2 border border-gray-300 rounded-lg w-full">
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-color-dark-espresso text-sm">Last Name</label>
                        <input type="text"
                            name="last_name"
                            value="<?= esc($user->last_name) ?>"
                            class="p-2 border border-gray-300 rounded-lg w-full">
                    </div>

                    <div>
=======
                        <label class="block mb-1 font-semibold text-sm">First Name</label>
                        <input type="text"
                            value="Juan"
                            class="bg-[#F3E9E2] p-2 border border-[#DCC9BB] rounded-lg outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black">
                    </div>
                    <div>
                        <label class="block mb-1 font-semibold text-sm">Middle Name</label>
                        <input type="text"
                            value="Dela"
                            class="bg-[#F3E9E2] p-2 border border-[#DCC9BB] rounded-lg outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black">
                    </div>
                    <div>
                        <label class="block mb-1 font-semibold text-sm">Last Name</label>
                        <input type="text"
                            value="Cruz"
                            class="bg-[#F3E9E2] p-2 border border-[#DCC9BB] rounded-lg outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black">
                    </div>
                    <div>
                        <label class="block mb-1 font-semibold text-sm">Email Address</label>
                        <input type="email"
                            value="juan.delacruz@example.com"
                            class="bg-[#F3E9E2] p-2 border border-[#DCC9BB] rounded-lg outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black">
                    </div>

                    <div>
>>>>>>> parent of 4d70c91 (Refactor profile page UI: apply Arceus color palette (gold, white, gray), update buttons, inputs, and headings for a clean celestial theme)
                        <label class="block mb-1 font-medium text-color-dark-espresso text-sm">Email Address</label>
                        <input type="email"
                            name="email"
                            value="<?= esc($user->email) ?>"
                            class="p-2 border border-gray-300 rounded-lg w-full">
                    </div>

                </div>

                <!-- Save Changes Button -->
                <div class="pt-4 w-full">
                    <button type="submit" class="bg-blue-600 px-4 py-2 rounded w-full text-white">
                        Save Changes
                    </button>
                </div>

                <!-- Save Button -->
                <div class="pt-4 w-full">
                    <?= view('components/buttons/primary_button', [
                        'btnName' => 'Save Changes',
                        'disable' => false,
                        'version' => false,
                        'link' => '#'
                    ]) ?>
                </div>

            </div>
        </section>
    </main>

    <!-- Footer -->
    <?= view('components/footer') ?>

</body>

</html>