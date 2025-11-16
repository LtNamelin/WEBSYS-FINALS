<?php
  $errors = $errors ?? [];
  $old = $old ?? [];
?>

<!DOCTYPE html>
<html lang="en">

  <?= view('components/head', [
          'title' => 'My Coffee | Login'
      ])?>
    
<body class="bg-[#2b1e13] text-white flex items-center justify-center min-h-screen">
  
  <!-- Login Card -->
  <div class="bg-[#e5d6cc] p-8 rounded-xl shadow-lg w-full max-w-md">
    <h2 class="text-3xl text-[#4E342E] font-bold text-center mb-6">Login</h2>

    <form action="/loginPage" method="post" novalidate class="space-y-4">
      <!-- Email -->
      <div>
        <label for="email" class="block text-sm text-[#4E342E] font-semibold mb-1">Email</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          autocomplete="email" 
          value="<?= esc($old['email'] ?? '')?>" 
          aria-invalid="<?= isset($errors['email']) ? 'true' : 'false' ?>" aria-describedby="email-error" 
          placeholder="Enter your email" 
          class="w-full px-4 py-2 rounded-lg text-black  focus:ring-2 focus:ring-[#4E342E] focus:outline-none" 
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)" 
          required>

        <?php if (! empty($errors['email'])): ?>
          <p id="email-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['email']) ?></p>
        <?php endif; ?>
      </div>

       <!-- Password -->
      <div>
        <label for="password" class="block text-sm text-[#4E342E] font-semibold mb-1">Password</label>
        <input
          id="password"
          name="password"
          type="password"
          placeholder="Enter your password"
          required
          aria-invalid="<?= isset($errors['password']) ? 'true' : 'false' ?>"
          aria-describedby="password-error"
          class="w-full px-4 py-2 rounded-lg text-black focus:ring-2 focus:ring-[#4E342E] focus:outline-none"
          style="box-shadow: inset 0 2px 4px rgba(0,0,0,0.5)"
        >
        <?php if (! empty($errors['password'])): ?>
          <p id="password-error" class="mt-2 text-red-600 text-sm"><?= esc($errors['password']) ?></p>
        <?php endif; ?>
      </div>

      <!-- Submit -->
      <button type="submit" class="w-full bg-[#4E342E] hover:bg-[#8d6249] transition duration-300 py-2 rounded-lg font-bold cursor-pointer">
        Login
      </button>
    </form>

    <!-- Links -->
    <p class="text-center text-[#4E342E] text-sm mt-4">
      Don’t have an account?
      <a href="/signupPage" class="text-blue-400 hover:underline">Sign up</a>
    </p>

    <p>
        <a href="/" class="text-blue-400 hover:underline">Back to Home</a>
    </p>
  </div>

</body>
</html>
