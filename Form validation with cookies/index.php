<?php

$name = "";
$student_id = "";
$email = "";
$department = "";

$errors = [];
$message = "";

if (isset($_POST['clear_cookie'])) {
    setcookie("student_name", "", time() - 3600, "/");
    setcookie("student_id", "", time() - 3600, "/");
    $message = "Cookie deleted successfully.";
}

if (isset($_POST['submit'])) {

    $name = trim($_POST['student_name']);
    $student_id = trim($_POST['student_id']);
    $email = trim($_POST['email']);
    $department = $_POST['department'] ?? "";
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($name)) {
        $errors[] = "Student Name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        $errors[] = "Student Name should contain only letters and spaces.";
    }

    if (empty($student_id)) {
        $errors[] = "Student ID is required.";
    } elseif (strlen($student_id) < 4) {
        $errors[] = "Student ID must contain at least 4 characters.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }

    if (empty($department)) {
        $errors[] = "Please select a department.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must contain at least 6 characters.";
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match.";
    }

    if (empty($errors)) {
        setcookie("student_name", $name, time() + 3600, "/");
        setcookie("student_id", $student_id, time() + 3600, "/");
        $message = "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>

<body>

<h2>Student Registration Form</h2>

<?php

if (isset($_COOKIE['student_name']) && isset($_COOKIE['student_id'])) {

    echo "<h3>Welcome Back!</h3>";
    echo "Student Name: " . htmlspecialchars($_COOKIE['student_name']) . "<br>";
    echo "Student ID: " . htmlspecialchars($_COOKIE['student_id']) . "<br><br>";

} else {

    echo "No saved student information found.<br><br>";
}

if (!empty($message)) {
    echo "<p>" . htmlspecialchars($message) . "</p>";
}

if (!empty($errors)) {

    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }
}

?>

<form method="POST">

    <label>Student Name:</label><br>
    <input type="text" name="student_name"
           value="<?php echo htmlspecialchars($name); ?>">
    <br><br>

    <label>Student ID:</label><br>
    <input type="text" name="student_id"
           value="<?php echo htmlspecialchars($student_id); ?>">
    <br><br>

    <label>Email:</label><br>
    <input type="text" name="email"
           value="<?php echo htmlspecialchars($email); ?>">
    <br><br>

    <label>Department:</label><br>
    <select name="department">
        <option value="">Select Department</option>
        <option value="CSE">CSE</option>
        <option value="EEE">EEE</option>
        <option value="BBA">BBA</option>
        <option value="English">English</option>
    </select>
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password">
    <br><br>

    <label>Confirm Password:</label><br>
    <input type="password" name="confirm_password">
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<form method="POST">
    <button type="submit" name="clear_cookie">
        Clear Cookie
    </button>
</form>

</body>