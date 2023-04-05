<?php
//import header
require_once('./app/views/header.php')
?>
<!--Content goes here-->
<div class="container min-vh-100">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-6 col-md-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-center mb-4">Login</h5>
            <form action="" method="post">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                  <button class="btn btn-outline-secondary" type="button" id="show-password">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
            <div class="text-center mt-3">
              <a href="#">Create Account</a>
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