<?php 
include('randomGen.php');
include('config.php');

$errorEmpty = false;
$errorEmail = false;

if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['phoneNumber']) || isset($_POST['payment'])){

    // Get the submitted form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phone_number'];
    $payment = $_POST['payment'];
    // email message
    /*
    $to = $email; 
    $msg = "Duck Hunter Info \n Your name: $name \n Email: $email \n Phone: $phoneNumber \n Cashapp / Venmo: $payment \n Contest Code: $contest_code";
    $headers = "From: duckhunt@eternallux.com" . "\r\n" .
    "Reply-To: duckhunt@eternmallux.com" . "\r\n" .
    "Reply-To: duckhunt@eternmallux.com" . "\r\n" .
    "CC: voidspacelighting@gmail.com" . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    */

    if(!empty($name) && !empty($email) && !empty($phoneNumber) && !empty($payment)){

        $response['message'] = "Success.";
        // $con = mysqli_connect('localhost', 'ukqes9ijy4czh', 'wabbit_sux672','dbdibwg114v9h2');

        $query = "INSERT INTO hunters(names,email,phone,payment_info,contest_code) ";
            $query .= "VALUES ('$name','$email','$phoneNumber','$payment','$contest_code')";

            if(mysqli_query($con,$query)){
                $response['message'] = "You're in the hunt!";
                $response['status'] = 1;
            }
            else{
                $response['message'] = "Error occured, please try again.";
                $response['status'] = 0;
            }

        // if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        //     $response['message'] = "Invalid Email";
        //     $errorEmail = true;
        // }else{
        //     if($errorEmpty == false && $errorEmail == false){

        //         $uploadStatus = 1;
        //         //upload File
        //     }else{
        //         $response['message'] = "Sorry! an error occured";
        //         $uploadStatus = 0;
        //     }
           
        // }
        // if($uploadStatus == 1){
            
        // }

    }else{
        $response['message'] = "Please fill out all fields.";
        $errorEmpty = true;
    }
    // $response['message'] = "First Name";
  
}

echo json_encode($response);
?>
