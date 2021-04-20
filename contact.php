<?php
// this array will be an associative array when you extract the values from the form
// post is a SUPER global
if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$payment = $_POST['payment'];

$connection = mysqli_connect('localhost', 'wxyzr_TO', 'wabbit_sux672','duck_hunt_app');

 $query = "INSERT INTO hunters(names,email,phone,payment_info,contest_code) ";
    $query .= "VALUES ('$name','$email','$phoneNumber','$payment','$contest_code')";

   $result =  mysqli_query($connection, $query);

   if(!$result) {
       die('Query FAILED' . mysqli_error());
   }

    if($connection) {

        echo "We are connected";
    } else {

    die("Database connection failed");
    }
/**/
    echo "$name <br> $email <br> $phoneNumber <br> $payment <br> $contest_code";
}

?>