<?php
//import header
require_once('./app/views/header.php');
?>
<!--Content here-->
<div class="container min-vh-100">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-8 col-md-8 col-lg-6">
        <div class="card p-4">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Register</h2>
            <p class="text-black-50 text-center mb-5">Please enter your E-Mail and password to create an account!</p>
            <form action="./app/includes/register.ini.php" method="post">
              <div class="mb-3">
                <label for="email" class="form-label fs-5">Email address</label>
                <input type="email" class="form-control fs-5 <?php 
                      if (isset($_GET['error'])){
                        if ($_GET['error'] == 'emptyFields'){ echo 'is-invalid'; }
                        if ($_GET['error'] == 'EmailAlreadyInUse'){ echo 'is-invalid'; }
                  }
                    ?>" id="email" placeholder="Enter email" name="frm-register-mail">
                                      <?php 
                  if (isset($_GET['error'])){
                      if ($_GET['error'] == 'EmailAlreadyInUse'){
                        echo '<div class="invalid-feedback">E-Mail is already registerd</div>';
                      }
                  } 
                ?>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fs-5">Password</label>
                <div class="input-group">
                  <input type="password" class="form-control fs-5 <?php 
                      if (isset($_GET['error'])){
                        if ($_GET['error'] == 'emptyFields'){ echo 'is-invalid'; }
                        if ($_GET['error'] == 'passwordNotMatching'){ echo 'is-invalid'; }
                  }
                    ?>" id="password" placeholder="Enter password" name="frm-register-password">
                  <button class="btn btn-outline-secondary" type="button" id="show-password">
                    <i class="bi bi-eye"></i>
                  </button>
                </div>
              </div>
              <div class="mb-3 mt-3">
                <label for="password" class="form-label fs-5">Confirm Password</label>
                <div class="input-group">
                  <input type="password" class="form-control fs-5 <?php 
                      if (isset($_GET['error'])){
                        if ($_GET['error'] == 'emptyFields'){ echo 'is-invalid'; }
                        if ($_GET['error'] == 'passwordNotMatching'){ echo 'is-invalid'; }
                  }
                    ?>" id="password-confirm" placeholder="Enter password" name="frm-register-password-confirm">
                  <button class="btn btn-outline-secondary" type="button" id="show-password-confirm">
                    <i class="bi bi-eye"></i>
                  </button>
                  <?php 
                  if (isset($_GET['error'])){
                      if ($_GET['error'] == 'emptyFields'){
                        echo '<div class="invalid-feedback">Please fill in all Fields!</div>';
                      }
                      if ($_GET['error'] == 'passwordNotMatching'){
                        echo '<div class="invalid-feedback">Please check that both passwords match</div>';
                      }
                  } 
                ?>
                </div>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary fs-5" name="frm-register-submit">Register</button>
              </div>
            </form>
            <div class="mt-5">
              <p class="mb-0 text-center">Already have an account? <a href="./index.php" class="fw-bold">Login</a></p>
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

    const showPasswordConfirmButton = document.getElementById("show-password-confirm");
    const passwordConfirmInput = document.getElementById("password-confirm");
    showPasswordConfirmButton.addEventListener("click", function() {
        if (passwordConfirmInput.type === "password") {
            passwordConfirmInput.type = "text";
            showPasswordConfirmButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
        } else {
            passwordConfirmInput.type = "password";
            showPasswordConfirmButton.innerHTML = '<i class="bi bi-eye"></i>';
        }
        });

  </script>


<?php
//import footer
require_once('./app/views/footer.php')
?>