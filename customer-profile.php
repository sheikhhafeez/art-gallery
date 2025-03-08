<?php include "assets/components/header.php" ?>

<?php 
if ($_SESSION['role'] != 3 ) {
    header("location: http://localhost/art_gallery/");
    exit;
};
?>

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="profile-container">
                <h1>Your Personal Info</h1>
                <?php
                $customeremail = "SELECT * FROM customers WHERE customer_email = '" . $_SESSION['email'] . "'";
                $customerquery = mysqli_query($conn,$customeremail);
                $num = mysqli_num_rows($customerquery);
                $row = mysqli_fetch_assoc($customerquery);
                ?>
                <div class="profile-details">
                    <h2>Name:</h2>
                    <p><?php echo $row['customer_name']; ?></p>
                </div>
                <div class="profile-details">
                    <h2>Email:</h2>
                    <p><?php echo $row['customer_email']; ?></p>
                </div>
                <div class="profile-details">
                    <h2>Phone:</h2>
                    <p><?php echo $row['customer_number']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "assets/components/footer.php" ?>