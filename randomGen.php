<?php 
// random code generator

session_start();
if(!isset($_SESSION['index'])){
    $_SESSION['index'] = rand(100000, 999999);
}
$contest_code = $_SESSION['index'];

$response = array(
    'status' => 0,
    'message' => 'Form submission Failed'
);

$varTest = "A test";

?>
