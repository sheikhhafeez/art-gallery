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

    if($email_row == null ){

        $hash = password_hash($signup_pass, PASSWORD_DEFAULT);

        if($signup_role == "artist"){
            $artist_sql="INSERT INTO artists (artist_name, artist_email, artist_image) VALUES ('$signup_name','$signup_email','$artist_image')";
            $artist_query=mysqli_query($conn,$artist_sql);
            $user_sql = "INSERT INTO users (user_email, user_pass, user_role) VALUES ('$signup_email', '$hash', 2)";
            $user_query=mysqli_query($conn,$user_sql);
        }else{
            $customer_sql="INSERT INTO customers (customer_name, customer_email, customer_number) VALUES ('$signup_name','$signup_email','$customer_number')";
            $customer_query=mysqli_query($conn,$customer_sql);
            $user_sql = "INSERT INTO users (user_email, user_pass, user_role) VALUES ('$signup_email', '$hash', 3)";
            $user_query=mysqli_query($conn,$user_sql);
        }

        } else {
            echo "<script>alert('This User Is Already Exist');</script>";    
        }
    } else {
        echo "<script>alert('Please Match the Password');</script>";
    }
}