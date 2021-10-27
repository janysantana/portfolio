<?php 

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: ".$name.".\n\n".$message;
$mailTo = "contact@janysantana.com";
$header = "From: ".$mailFrom;

mail($mailTo, $formcontent, $header);
header("Location: index.php?mailsend");
}
?>