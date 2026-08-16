<?php

$applicant_id = $_GET["id"] ?? "";
$name = $_GET["name"] ?? "";
$cv_name = $_GET["cv"] ?? "";
$email = $_GET["email"] ?? "";
$phone = $_GET["phone"] ?? "";
$gender = $_GET["gender"] ?? "";
$position = $_GET["position"] ?? "";
$qualification = $_GET["qualification"] ?? "";
$address = $_GET["address"] ?? "";

$request_id = $_REQUEST["id"] ?? "";
$request_name = $_REQUEST["name"] ?? "";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Successful</title>
</head>
<body>

<h2>APPLICATION SUCCESSFUL</h2>

<p>Applicant ID: <?php echo htmlspecialchars($applicant_id); ?></p>

<p>Name: <?php echo htmlspecialchars($name); ?></p>

<p>Email: <?php echo htmlspecialchars($email); ?></p>

<p>Phone: <?php echo htmlspecialchars($phone); ?></p>

<p>Gender: <?php echo htmlspecialchars($gender); ?></p>

<p>Job Position: <?php echo htmlspecialchars($position); ?></p>

<p>Qualification: <?php echo htmlspecialchars($qualification); ?></p>

<p>Address: <?php echo htmlspecialchars($address); ?></p>

<p>Uploaded CV: <?php echo htmlspecialchars($cv_name); ?></p>

<p>Application submitted successfully.</p>

</body>
</html>