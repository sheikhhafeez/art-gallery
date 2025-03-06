<?php
 include "components/backend.php"; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Art Gallery Dashboard</title>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/fav-icon.png" />
  </head>
  <body>

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
            <form class="pt-3" method="post" action="" enctype="multipart/form-data">
              <div class="form-group">
                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="name" name="signup_name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email" name="signup_email" required>
              </div>
              <div class="form-group">
                <select class="form-select form-select-lg" id="artistselect" name="signup_role" required>
                  <option selected disabled>Select Role</option>
                  <option value="artist">Artist</option>
                  <option value="customer">Customer</option>
                </select>
              </div>
              <div class="mb-3" id="artistDiv" style="display: none; ">
                  <label class="font-weight-light mb-2">Upload Artist Image</label>
                  <input type="file" class="form-control" name="signup_image" id="image_input">
                  <img class="image-preview" id="image_preview" src="" alt="Image Preview" style="max-width: 100%;margin-top:10px; max-height: 300px; display: none;">
              </div>
              <div class="form-group">
                <input type="number" class="form-control form-control-lg" id="" placeholder="Enter your Number" name="customer_number" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password" name="signup_pass" required>
              </div>
              <div class="form-group">
                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Confirm Password" name="signup_confirm_pass" required>
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
          document.getElementById("image_input").addEventListener("change", function() {
            var input = this;
            var preview = document.getElementById("image_preview");
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = "block";
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = "";
                preview.style.display = "none";
            }
        });

        document.getElementById("artistselect").addEventListener("change", function() {
        var artistDiv = document.getElementById("artistDiv");
        if (this.value === "artist") {
            artistDiv.style.display = "block";
        } else {
            artistDiv.style.display = "none";
        }
    });
</script>

<script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="assets/vendors/chart.js/chart.umd.js"></script>
    <script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/dashboard.js"></script>
  </body>
</html>