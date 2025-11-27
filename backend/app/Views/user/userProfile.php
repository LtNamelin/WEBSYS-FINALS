<!DOCTYPE html>
<html>
<?= view('components/head', [
    'title' => 'Cafe de Lumiere | Profile'
]) ?>

<body class="bg-gray-50 text-gray-900">

    <?= view('components/header') ?>

    <main class="mx-8 py-10">
        <section class="bg-white shadow-lg mx-auto p-6 border border-yellow-200 rounded-xl max-w-2xl">
            <h2 class="mb-6 font-bold text-yellow-600 text-3xl text-center">My Profile</h2>

            <!-- Update Profile Form -->
            <form action="<?= site_url('user/update') ?>" method="post" class="flex flex-col items-center space-y-6">

                <!-- Profile Image -->
                <img src="<?= esc($user->profile_image ?? 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_640.png') ?>"
                    alt="Profile Image"
                    class="shadow-md border-4 border-yellow-300 rounded-full w-32 h-32">

                <!-- User Info -->
                <h3 class="font-semibold text-gray-800 text-xl">
                    <?= esc($user->first_name) ?> <?= esc($user->last_name) ?>
                </h3>
                <p class="text-gray-500"><?= esc($user->email) ?></p>

                <!-- Info Fields -->
                <div class="space-y-4 w-full">

                    <div>
                        <label class="block mb-1 font-medium text-gray-800 text-sm">First Name</label>
                        <input type="text"
                            name="first_name"
                            value="<?= esc($user->first_name) ?>"
                            class="p-2 border border-gray-300 focus:border-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-300 w-full">
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-800 text-sm">Middle Name</label>
                        <input type="text"
                            name="middle_name"
                            value="<?= esc($user->middle_name) ?>"
                            class="p-2 border border-gray-300 focus:border-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-300 w-full">
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-800 text-sm">Last Name</label>
                        <input type="text"
                            name="last_name"
                            value="<?= esc($user->last_name) ?>"
                            class="p-2 border border-gray-300 focus:border-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-300 w-full">
                    </div>

                    <div>
                        <label class="block mb-1 font-medium text-gray-800 text-sm">Email Address</label>
                        <input type="email"
                            name="email"
                            value="<?= esc($user->email) ?>"
                            class="p-2 border border-gray-300 focus:border-yellow-500 rounded-lg focus:ring-2 focus:ring-yellow-300 w-full">
                    </div>

                </div>

                <!-- Save Changes Button -->
                <div class="pt-4 w-full">
                    <button type="submit" class="bg-yellow-500 hover:bg-yellow-600 shadow-md px-4 py-2 rounded w-full font-semibold text-white transition-all">
                        Save Changes
                    </button>
                </div>
            </form>

            <!-- Delete Account Form -->
            <form action="<?= site_url('user/delete') ?>" method="post" class="mt-6 text-center">
                <button type="submit"
                    class="text-red-600 text-sm underline"
                    onclick="return confirm('Are you sure you want to delete your account?')">
                    Delete Account
                </button>
            </form>

        </section>
    </main>

    <?= view('components/footer') ?>

</body>

</html>