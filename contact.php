<?php
// this array will be an associative array when you extract the values from the form
// post is a SUPER global

if(isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$payment = $_POST['payment'];
$to = $email;
$msg = "Duck Hunter Info \n Your name: $name \n Email: $email \n Phone: $phoneNumber \n Cashapp / Venmo: $payment \n Contest Code: $contest_code";
$headers = "From: duckhunt@eternallux.com" . "\r\n" .
"Reply-To: duckhunt@eternmallux.com" . "\r\n" .
"Reply-To: duckhunt@eternmallux.com" . "\r\n" .
"CC: voidspacelighting@gmail.com" . "\r\n" .
'X-Mailer: PHP/' . phpversion();

echo $name;
$connection = mysqli_connect('localhost', 'ukqes9ijy4czh', 'wabbit_sux672','dbdibwg114v9h2');

 $query = "INSERT INTO hunters(names,email,phone,payment_info,contest_code) ";
    $query .= "VALUES ('$name','$email','$phoneNumber','$payment','$contest_code')";

   $result =  mysqli_query($connection, $query);

   if(!$result) {
       die('Query FAILED' . mysqli_error());
   }
   
   mail($to,$name,$msg,$headers);

   }
    if($connection) {

        echo "We are connected";
    } else {

    die("Database connection failed");
    }

    echo "$name <br> $email <br> $phoneNumber <br> $payment <br> $contest_code";
?>