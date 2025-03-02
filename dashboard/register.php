<?php include "components/header.php"; ?>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-center auth">
      <div class="row flex-grow">
        <div class="col-lg-4 mx-auto">
          <div class="auth-form-light text-left p-5">
            <div class="brand-logo">
            <img src="assets/images/main-logo.png" style="width: 100px;">
            </div>
            <h4>New here?</h4>
            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
            <form class="pt-3" method="post" action="">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="name" name="signup_name">
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="signup_email">
              </div>
              <div class="form-group">
                <select class="form-select form-select-lg" id="exampleFormControlSelect2" name="signup_role">
                  <option selected disabled>Select Role</option>
                  <option value="artist">Artist</option>
                  <option value="customer">Customer</option>
                </select>
              </div>
              <div class="form-group">
                <input type="number" class="form-control form-control-lg" id="" placeholder="Enter your Number" name="customer_number">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="signup_pass">
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name="signup_confirm_pass">
              </div>
              <div class="mt-3 d-grid gap-2">
                <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" name="signup_btn">SIGN UP</button>
              </div>
              <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="login.php" class="text-primary">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  
</script>

<?php include "components/footer.php"; ?>