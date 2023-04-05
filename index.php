<?php
//import header
require_once('./app/views/header.php')
?>
<!--Content goes here-->
<div class="container min-vh-100">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-8 col-md-8 col-lg-6">
        <div class="card p-4">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>
            <p class="text-black-50 text-center mb-5">Please enter your login and password!</p>
            <form action="" method="post">
              <div class="mb-3">
                <label for="email" class="form-label fs-5">Email address</label>
                <input type="email" class="form-control fs-5" id="email" placeholder="Enter email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fs-5">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control fs-5" id="password" placeholder="Enter password" required>
                  <button class="btn btn-outline-secondary" type="button" id="show-password">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary fs-5">Login</button>
              </div>
            </form>
            <div class="mt-5">
                <p class="mb-0 text-center">Don't have an account? <a href="#!" class="fw-bold">Sign Up</a>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <script>
    const showPasswordButton = document.getElementById("show-password");
    const passwordInput = document.getElementById("password");
    showPasswordButton.addEventListener("click", function() {
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        showPasswordButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
      } else {
        passwordInput.type = "password";
        showPasswordButton.innerHTML = '<i class="bi bi-eye"></i>';
      }
    });
  </script>
  

  
<?php
//import footer
require_once('./app/views/footer.php')
?>