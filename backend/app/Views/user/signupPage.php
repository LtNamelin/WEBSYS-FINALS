<?php
$errors = $errors ?? [];
$old = $old ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<?= view('components/head', [
  'title' => 'My Coffee | Sign up'
]) ?>

<body class="flex justify-center items-center bg-[#2b1e13] min-h-screen text-white">

  <!-- ⭐ Include the HEADER here -->
  <?= view('components/header'); ?>

  <!-- Signup Card -->
  <div class="bg-[#e5d6cc] shadow-lg mt-32 p-8 rounded-xl w-full max-w-md">
    <h2 class="mb-6 font-bold text-[#4E342E] text-3xl text-center">Sign Up</h2>

    <form action="/signupPage" method="post" class="space-y-4" novalidate>

      <!-- First Name -->
      <div>
        <label for="first_name" class="block mb-1 font-semibold text-[#4E342E] text-sm">First Name</label>
        <input
          type="text"
          id="first_name"
          name="first_name"
          placeholder="Enter your first name"
          value="<?= esc($old['first_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>"
          aria-describedby="first_name-error"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#A67B5B] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>

        <?php if (!empty($errors['first_name'])): ?>
          <p id="first_name-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['first_name']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Middle Name -->
      <div>
        <label for="middle_name" class="block mb-1 font-semibold text-[#4E342E] text-sm">Middle Name (Optional)</label>
        <input
          type="text"
          id="middle_name"
          name="middle_name"
          placeholder="Enter your middle name"
          value="<?= esc($old['middle_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['middle_name']) ? 'true' : 'false' ?>"
          aria-describedby="middle_name-error"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#A67B5B] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)">
      </div>

      <!-- Last Name -->
      <div>
        <label for="last_name" class="block mb-1 font-semibold text-[#4E342E] text-sm">Last Name</label>
        <input
          type="text"
          id="last_name"
          name="last_name"
          placeholder="Enter your last name"
          value="<?= esc($old['last_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>"
          aria-describedby="last_name-error"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#A67B5B] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block mb-1 font-semibold text-[#4E342E] text-sm">Email</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="Enter your email"
          value="<?= esc($old['email'] ?? '') ?>"
          aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
          aria-describedby="email-error"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#A67B5B] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>
      </div>

      <!-- Password -->
      <div>
        <label for="password" class="block mb-1 font-semibold text-[#4E342E] text-sm">Password</label>
        <input
          type="password"
          id="password"
          name="password"
          placeholder="Enter your password"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#A67B5B] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="confirm" class="block mb-1 font-semibold text-[#4E342E] text-sm">Confirm Password</label>
        <input
          type="password"
          id="password_confirm"
          name="password_confirm"
          placeholder="Confirm your password"
          class="px-4 py-2 rounded-lg focus:outline-none focus:ring-[#A67B5B] focus:ring-2 w-full text-black"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>
      </div>

      <!-- Submit -->
      <button type="submit"
        class="bg-[#4E342E] hover:bg-[#8d6249] py-2 rounded-lg w-full font-bold transition duration-300">
        Sign Up
      </button>
    </form>

    <p class="mt-4 text-[#4E342E] text-sm text-center">
      Already have an account?
      <a href="/loginPage" class="text-blue-400 hover:underline">Login</a>
    </p>

    <p class="mt-2 text-center">
      <a href="/" class="text-blue-400 hover:underline">Back to Home</a>
    </p>

  </div>

</body>

</html>