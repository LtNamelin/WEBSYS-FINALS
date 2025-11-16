<?php
  $errors = $errors ?? [];
  $old = $old ?? [];
?>

<!DOCTYPE html>
<html lang="en">
  <?= view('components/head', [
          'title' => 'My Coffee | Sign up'
      ])?>
<body class="bg-[#2b1e13] text-white flex items-center justify-center min-h-screen">

  <!-- Signup Card -->
  <div class="bg-[#e5d6cc] p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-3xl text-[#4E342E] font-bold text-center mb-6">Sign Up</h2>

    <form action="/signupPage" method="post" class="space-y-4" novalidate>
      <!-- First Name -->
      <div>
        <label for="first_name" class="block text-sm text-[#4E342E] font-semibold mb-1">First Name</label>
        <input 
          type="text" 
          id="first_name" 
          name="first_name" 
          placeholder="Enter your first name"
          value="<?= esc($old['first_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['first_name']) ? 'true' : 'false' ?>"
          aria-describedby="first_name-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" 
          required>

        <?php if (!empty($errors['first_name'])): ?>
          <p id="first_name-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['first_name']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Middle Name (Optional) -->
      <div>
        <label for="middle_name" class="block text-sm text-[#4E342E] font-semibold mb-1">Middle Name (Optional)</label>
        <input 
          type="text" 
          id="middle_name" 
          name="middle_name" 
          placeholder="Enter your middle name"
          value="<?= esc($old['middle_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['middle_name']) ? 'true' : 'false' ?>"
          aria-describedby="middle_name-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)">

        <?php if (!empty($errors['middle_name'])): ?>
          <p id="middle_name-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['middle_name']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Last Name -->
      <div>
        <label for="last_name" class="block text-sm text-[#4E342E] font-semibold mb-1">Last Name</label>
        <input 
          type="text" 
          id="last_name" 
          name="last_name" 
          placeholder="Enter your last name"
          value="<?= esc($old['last_name'] ?? '') ?>"
          aria-invalid="<?= isset($errors['last_name']) ? 'true' : 'false' ?>"
          aria-describedby="last_name-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" 
          required>

        <?php if (!empty($errors['last_name'])): ?>
          <p id="last_name-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['last_name']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm text-[#4E342E] font-semibold mb-1">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email"
          value="<?= esc($old['email'] ?? '') ?>"
          aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>"
          aria-describedby="email-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" 
          required>

        <?php if (!empty($errors['email'])): ?>
          <p id="email-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
        <?php endif; ?>

      <!-- Password -->
      <div>
        <label for="password" class="block text-sm text-[#4E342E] font-semibold mb-1">Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          placeholder="Enter your password"
          aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
          aria-describedby="password-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
          required>

        <?php if (!empty($errors['password'])): ?>
          <p id="password-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['password']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="confirm" class="block text-sm text-[#4E342E] font-semibold mb-1">Confirm Password</label>
        <input 
          type="password" 
          id="password_confirm" 
          name="password_confirm" 
          placeholder="Confirm your password"
          aria-invalid="<?= isset($errors['confirm']) ? 'true' : 'false' ?>"
          aria-describedby="confirm-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#A67B5B] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" 
          required>

        <?php if (!empty($errors['confirm'])): ?>
          <p id="confirm-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['confirm']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Submit -->
      <button type="submit"
              class="w-full bg-[#4E342E] hover:bg-[#8d6249] transition duration-300 py-2 rounded-lg font-bold">
        Sign Up
      </button>
    </form>

    <!-- Links -->
    <p class="text-center text-[#4E342E] text-sm mt-4">
      Already have an account?
      <a href="/loginPage" class="text-blue-400 hover:underline">Login</a>
    </p>

    <p>
        <a href="/" class="text-blue-400 hover:underline">Back to Home</a>
    </p>
  </div>

</body>
</html>
