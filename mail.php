<?php 

if (isset($_POST['submit'])) {

header("Location: index.php?mailsend");
}

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$formcontent="From: ".$name.".\n\n".$message;
$mailTo = "contact@janysantana.com";
$header = "From: ".$mailFrom;
echo "Test";
mail($mailTo, $formcontent, $header);
echo "Test";
?>