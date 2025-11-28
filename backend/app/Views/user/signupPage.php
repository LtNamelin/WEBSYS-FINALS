<?php
$errors = $errors ?? [];
$old = $old ?? [];
?>

<!DOCTYPE html>
<html lang="en">

<?= view('components/head', [
  'title' => 'Café de Lumière | Sign Up'
]) ?>

<body class="flex flex-col items-center bg-[#FFFFFF] min-h-screen text-[#4E342E]">

  <!-- Header -->
  <?= view('components/header'); ?>

  <!-- Signup Card -->
  <div class="bg-[#E5D6CC] shadow-lg mt-32 p-8 border border-[#DCC9BB] rounded-xl w-full max-w-md">

    <h2 class="mb-6 font-bold text-[#4E342E] text-3xl text-center">Create an Account</h2>

    <form action="/signupPage" method="post" novalidate class="space-y-4">

      <!-- First Name -->
      <div>
        <label class="block mb-1 font-semibold text-[#4E342E] text-sm">First Name</label>
        <input
          type="text"
          name="first_name"
          value="<?= esc($old['first_name'] ?? '') ?>"
          placeholder="Enter your first name"
          class="bg-[#F3E9E2] px-4 py-2 border border-[#DCC9BB] rounded-lg focus:outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black"
          required>
      </div>

      <!-- Last Name -->
      <div>
        <label class="block mb-1 font-semibold text-[#4E342E] text-sm">Last Name</label>
        <input
          type="text"
          name="last_name"
          value="<?= esc($old['last_name'] ?? '') ?>"
          placeholder="Enter your last name"
          class="bg-[#F3E9E2] px-4 py-2 border border-[#DCC9BB] rounded-lg focus:outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black"
          required>
      </div>

      <!-- Email -->
      <div>
        <label class="block mb-1 font-semibold text-[#4E342E] text-sm">Email</label>
        <input
          type="email"
          name="email"
          autocomplete="email"
          value="<?= esc($old['email'] ?? '') ?>"
          placeholder="Enter your email"
          class="bg-[#F3E9E2] px-4 py-2 border border-[#DCC9BB] rounded-lg focus:outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black"
          required>
      </div>

      <!-- Password -->
      <div>
        <label class="block mb-1 font-semibold text-[#4E342E] text-sm">Password</label>
        <input
          type="password"
          name="password"
          placeholder="Create a password"
          class="bg-[#F3E9E2] px-4 py-2 border border-[#DCC9BB] rounded-lg focus:outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black"
          required>
      </div>

      <!-- Confirm Password -->
      <div>
        <label class="block mb-1 font-semibold text-[#4E342E] text-sm">Confirm Password</label>
        <input
          type="password"
          name="confirm_password"
          placeholder="Confirm your password"
          class="bg-[#F3E9E2] px-4 py-2 border border-[#DCC9BB] rounded-lg focus:outline-none focus:ring-[#FFD25F] focus:ring-2 w-full text-black"
          required>
      </div>

      <!-- Submit Button -->
      <button type="submit"
        class="bg-[#FFD25F] hover:bg-[#FFB800] py-2 rounded-lg w-full font-bold text-black transition duration-300 cursor-pointer">
        Sign Up
      </button>
    </form>

    <!-- Links -->
    <p class="mt-4 text-[#4E342E] text-sm text-center">
      Already have an account?
      <a href="/loginPage" class="hover:opacity-70 text-[#4E342E] underline">Login</a>
    </p>

    <p class="mt-2 text-center">
      <a href="/" class="hover:opacity-70 text-[#4E342E] underline">Back to Home</a>
    </p>

  </div>

</body>

</html>