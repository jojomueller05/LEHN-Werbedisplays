<?php
//import header
require_once('./app/views/header.php');

?>
<!--Content goes here-->
<div class="container min-vh-100">
    <div class="row justify-content-center mt-5">
      <div class="col-sm-8 col-md-8 col-lg-6">
        <div class="card p-4">
          <div class="card-body">
            <h2 class="card-title text-center mb-4">Login</h2>
            <p class="text-black-50 text-center mb-5">Please enter your E-Mail and password!</p>
            <form action="./app/includes/login.ini.php" method="post">
              <div class="mb-3">
                <label for="email" class="form-label fs-5">Email address</label>
                <input type="email" class="form-control fs-5 <?php if (isset($_GET['error'])){
                  if ($_GET['error'] == 'emptyFields'){ echo 'is-invalid'; }
                  if ($_GET['error'] == 'loginFaild'){ echo 'is-invalid'; }
                } ?>" id="email" placeholder="Enter email" name="frm-login-mail">

                  <?php if (isset($_GET['error'])){
                    if ($_GET['error'] == 'emptyFields'){
                      echo '<div class="invalid-feedback">Please fill in Field!</div>';
                    }
                    if ($_GET['error'] == 'loginFaild'){
                       echo '<div class="invalid-feedback">E-Mail or Password is wrong!</div>'; 
                      }
                  } ?>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label fs-5">Password</label>
                <div class="input-group">

                  <input type="password" class="form-control fs-5 <?php if (isset($_GET['error'])){
                    if ($_GET['error'] == 'emptyFields'){ echo 'is-invalid'; }
                    if ($_GET['error'] == 'loginFaild'){ echo 'is-invalid'; }
                  } ?>" id="password" placeholder="Enter password" name="frm-login-password">
                    
                  <button class="btn btn-outline-secondary" type="button" id="show-password">
                    <i class="bi bi-eye"></i>
                  </button>
                  <?php if (isset($_GET['error'])){
                    if ($_GET['error'] == 'emptyFields'){
                      echo '<div class="invalid-feedback">Please fill in Field!</div>';
                    }
                    if ($_GET['error'] == 'loginFaild'){
                       echo '<div class="invalid-feedback">E-Mail or Password is wrong!</div>'; 
                      }
                  } ?>

                </div>
              </div>
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary fs-5" name="frm-login-submit">Login</button>
              </div>
            </form>
            <div class="mt-5">
                <p class="mb-0 text-center">Don't have an account? <a href="./register.php" class="fw-bold">Sign Up</a>
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