<?php
$errors = $errors ?? [];
$old = $old ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<?= view('components/head', [
  'title' => 'My Coffee | Login'
]) ?>

<body class="flex justify-center items-start bg-[#2b1e13] min-h-screen text-white">

  <!-- ⭐ Include HEADER here -->
  <?= view('components/header'); ?>

  <!-- Login Card -->
  <div class="bg-[#e5d6cc] shadow-lg mt-32 p-8 rounded-xl w-full max-w-md">
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
          aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
          aria-describedby="email-error"
          placeholder="Enter your email"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#4E342E] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>
        <?php if (! empty($errors['email'])): ?>
          <p id="email-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
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
          aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
          aria-describedby="password-error"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#4E342E] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)">
        <?php if (! empty($errors['password'])): ?>
          <p id="password-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['password']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Submit -->
      <button type="submit" class="bg-[#4E342E] hover:bg-[#8d6249] py-2 rounded-lg w-full font-bold transition duration-300 cursor-pointer">
        Login
      </button>
    </form>

    <!-- Links -->
    <p class="mt-4 text-[#4E342E] text-sm text-center">
      Don’t have an account?
      <a href="/signupPage" class="text-blue-400 hover:underline">Sign up</a>
    </p>

    <p class="mt-2 text-center">
      <a href="/" class="text-blue-400 hover:underline">Back to Home</a>
    </p>
  </div>

</body>

</html>