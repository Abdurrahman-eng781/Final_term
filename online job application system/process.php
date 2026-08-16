<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Invalid Request!");
}

$applicant_id = trim($_POST["applicant_id"] ?? "");
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$phone = trim($_POST["phone"] ?? "");
$password = $_POST["password"] ?? "";
$gender = $_POST["gender"] ?? "";
$job_position = $_POST["job_position"] ?? "";
$qualification = trim($_POST["qualification"] ?? "");
$address = trim($_POST["address"] ?? "");

$errors = [];

if (empty($applicant_id)) {
    $errors[] = "Applicant ID is required.";
}

if (empty($name)) {
    $errors[] = "Name is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email address.";
}

if (empty($phone)) {
    $errors[] = "Phone number is required.";
} elseif (!preg_match("/^[0-9]{11}$/", $phone)) {
    $errors[] = "Phone number must contain 11 digits.";
}

if (empty($password)) {
    $errors[] = "Password is required.";
} elseif (strlen($password) < 6) {
    $errors[] = "Password must contain at least 6 characters.";
}

if (empty($gender)) {
    $errors[] = "Please select your gender.";
}

if (empty($job_position)) {
    $errors[] = "Please select a job position.";
}

if (empty($qualification)) {
    $errors[] = "Qualification is required.";
}

if (empty($address)) {
    $errors[] = "Address is required.";
}

if (!isset($_FILES["cv"]) || $_FILES["cv"]["error"] == UPLOAD_ERR_NO_FILE) {

    $errors[] = "Please upload your CV.";

} else {

    $cv = $_FILES["cv"];

    if ($cv["size"] > 2 * 1024 * 1024) {
        $errors[] = "CV file size must not exceed 2 MB.";
    }

    $file_name = $cv["name"];
    $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));

    if (!in_array($extension, ["pdf", "doc", "docx"])) {
        $errors[] = "Only PDF, DOC and DOCX files are allowed.";
    }
}

if (!empty($errors)) {

    echo "<h2>Application Failed!</h2>";

    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }

    echo '<a href="index.php">Go Back</a>';

    exit;
}

$upload_folder = "uploads/";

if (!is_dir($upload_folder)) {
    mkdir($upload_folder, 0777, true);
}

$new_file_name = time() . "_" . basename($file_name);

move_uploaded_file(
    $cv["tmp_name"],
    $upload_folder . $new_file_name
);

header(
    "Location: result.php?" .
    "id=" . urlencode($applicant_id) .
    "&name=" . urlencode($name) .
    "&cv=" . urlencode($new_file_name) .
    "&email=" . urlencode($email) .
    "&phone=" . urlencode($phone) .
    "&gender=" . urlencode($gender) .
    "&position=" . urlencode($job_position) .
    "&qualification=" . urlencode($qualification) .
    "&address=" . urlencode($address)
);

exit;

?>