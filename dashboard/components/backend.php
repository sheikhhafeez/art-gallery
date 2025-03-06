<?php

$hostname="localhost";
$username="root";
$password="";
$dbname="art_gallery";

$conn= new mysqli($hostname, $username, $password, $dbname);

if(isset($_POST['signup_btn'])){
    $signup_name = $_POST['signup_name'];
    $signup_email = $_POST['signup_email'];
    $signup_role = $_POST['signup_role'];
    $customer_number = $_POST['customer_number'];
    $signup_pass = $_POST['signup_pass'];
    $signup_confirm_pass = $_POST['signup_confirm_pass'];

    if($signup_pass === $signup_confirm_pass){

    $email_check = "SELECT user_email FROM users WHERE user_email = '$signup_email'";
    $email_sql = mysqli_query( $conn, $email_check );
    $email_row = mysqli_fetch_array($email_sql);

    if($email_row == 0 ){

        $hash = password_hash($signup_pass, PASSWORD_DEFAULT);

        if($signup_role == "artist"){
            $upload_dir = '../assets/artist-images/';
            $artist_image = $_FILES['signup_image']['name'];
            $target_file = $upload_dir . ($artist_image);
            $tmp_dir = $_FILES['signup_image']['tmp_name'];
            move_uploaded_file($tmp_dir, $target_file);
            $artist_sql="INSERT INTO artists (artist_name, artist_email, artist_image) VALUES ('$signup_name','$signup_email','$artist_image')";
            $artist_query=mysqli_query($conn,$artist_sql);
            $user_sql = "INSERT INTO users (user_email, user_pass, user_role) VALUES ('$signup_email', '$hash', 2)";
            $user_query=mysqli_query($conn,$user_sql);
            // if($user_query){
            //     echo "<script>alert('You Are Succesfully Register Now You Can login');window.location.href = 'http://localhost/art_gallery/dashboard/login.php';</script>";
            // }
        }else{
            $customer_sql="INSERT INTO customers (customer_name, customer_email, customer_number) VALUES ('$signup_name','$signup_email','$customer_number')";
            $customer_query=mysqli_query($conn,$customer_sql);
            $user_sql = "INSERT INTO users (user_email, user_pass, user_role) VALUES ('$signup_email', '$hash', 3)";
            $user_query=mysqli_query($conn,$user_sql);
            if($user_query){
                echo "<script>alert('You Are Succesfully Register Now You Can login');window.location.href = 'http://localhost/art_gallery/dashboard/login.php';</script>";
            }
        }

        } else {
            echo "<script>alert('This User Is Already Exist');</script>";    
        }
    } else {
        echo "<script>alert('Please Match the Password');</script>";
    }
}

    if (isset($_POST['login_btn'])) {

        $login_email = $_POST["login_email"];
        $login_password = $_POST["login_password"];
        $sql = "SELECT * FROM users WHERE user_email = '$login_email'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);

        if ($num == 1) {
            if (password_verify($login_password, $row['user_pass'])) {
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['role'] = $row['user_role'];
                $_SESSION['email'] = $login_email;
                echo "<script>alert('You Are Succesfully login');window.location.href = 'http://localhost/art_gallery/';</script>";
            } else {
                echo "<script>alert('Invalid Password');</script>";
            }
        }else{
            echo "<script>alert('This user Doesn't Found');window.location.href = 'http://localhost/art_gallery/dashboard/register.php';</script>";
        }
    }