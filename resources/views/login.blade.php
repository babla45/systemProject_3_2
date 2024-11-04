<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <!-- Include Firebase SDKs -->
  {{-- <link rel="stylesheet" href="CSS/style.css"> --}}
  <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">

</head>

<body>

  <h2>Login to your account</h2>
  <div class="container">
    <p class="lab" for="emailInput">Enter your email:</p>
    <input type="email" id="emailInput" placeholder="email">

    <p class="lab" for="passwordInput">Enter your password:</p>
    <input type="password" id="passwordInput" placeholder="password">
    <button onclick="signIn()">Login</button>
  </div>

  {{-- <p>Don't have an account? <a href="{{ route('signup') }}">Create Account</a></p> --}}
  <p>Don't have an account? <a href="{{ route('signup') }}">Create Account</a></p>



</body>
</html>
