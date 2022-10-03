<?php 
if((isset($_POST['fullName'])) && (isset($_POST['email']) && (isset($_POST['contact'])) && isset($_POST['message']) !== ""))
$to = "Hafsa@flyskytour.com";
$subject = "Customer's Contact Form";
$message = '
<html>
<head>
<title>Customer Contact Form</title>
</head>
<body>
<p><strong>Name:</strong>'. $_POST['fullName'].'</p>
<p><strong>Email:</strong>'. $_POST['email'].' </p>
<p><strong>Phone Number:<strong>'. $_POST['contact'].' </p>
<h3>Message: '. $_POST['message'].'</h3>
</body>
</html>';

$headers = "Content-type: text/html";
$charset = "charset='utf-8\r\n'";
$headers .= "From: ". $_POST['email'] ."\r\n";
if(mail($to, $subject, $headers)){
    echo json_encode(array('status' => 'success'));
}
else {
    echo json_encode(array('status' => 'error'));
}
?>