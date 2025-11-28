<?php
$errors = $errors ?? [];
$old = $old ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<?= view('components/head', [
  'title' => 'Café de Lumière | Login'
]) ?>

<body class="flex flex-col items-center bg-[#ffffff] min-h-screen text-[#4E342E]">

  <!-- ⭐ HEADER -->
  <?= view('components/header'); ?>

  <!-- Login Card -->
  <div class="bg-[#E5D6CC] shadow-lg mt-32 p-8 border border-[#DCC9BB] rounded-xl w-full max-w-md">
    <h2 class="mb-6 font-bold text-[#4E342E] text-3xl text-center">Login</h2>

    <form action="/loginPage" method="post" novalidate class="space-y-4">

      <!-- Email -->
      <div>
        <label for="email" class="block mb-1 font-semibold text-[#4E342E] text-sm">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          autocomplete="email"
          value="<?= esc($old['email'] ?? '') ?>"
          placeholder="Enter your email"
          class="bg-[#F3E9E2] px-4 py-2 rounded-lg focus:outline-none focus:ring-[#ffd25f] focus:ring-2 w-full text-black"
          required>

        <?php if (! empty($errors['email'])): ?>
          <p class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block mb-1 font-semibold text-[#4E342E] text-sm">Password</label>
        <input
          id="password"
          name="password"
          type="password"
          placeholder="Enter your password"
          required
          class="bg-[#F3E9E2] px-4 py-2 rounded-lg focus:outline-none focus:ring-[#ffd25f] focus:ring-2 w-full text-black">

        <?php if (! empty($errors['password'])): ?>
          <p class="mt-2 text-red-600 text-sm"><?= esc($errors['password']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="bg-[#ffd25f] hover:bg-[#ffb800] py-2 rounded-lg w-full font-bold text-black transition duration-300 cursor-pointer">
        Login
      </button>
    </form>

    <!-- Links -->
    <p class="mt-4 text-[#4E342E] text-sm text-center">
      Don’t have an account?
      <a href="/signupPage" class="hover:opacity-70 text-[#4E342E] underline">Sign up</a>
    </p>

    <p class="mt-2 text-center">
      <a href="/" class="hover:opacity-70 text-[#4E342E] underline">Back to Home</a>
    </p>
  </div>

</body>

</html>