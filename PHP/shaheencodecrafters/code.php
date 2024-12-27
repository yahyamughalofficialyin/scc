<?php
session_start();
include "admin/v3.21.0/config.php";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'login') {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // Prepare and execute the query to check email existence
        $query = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['fname'] = $user['first_name'];
                $_SESSION['lname'] = $user['last_name'];
                echo 'success';
                exit; // Stop further execution
            } else {
                echo 'invalid_password';
                exit; // Stop further execution
            }
        } else {
            echo 'email_not_found';
            exit; // Stop further execution
        }

        $stmt->close();
        $conn->close();
    }

if (isset($_POST['action']) && $_POST['action'] === 'register') {
    function generateRandomString($length = 8) {
        return bin2hex(random_bytes($length / 2));
    }

    if ($_POST['action'] === 'check_email') {
        $email = $_POST['email'] ?? '';

        if (empty($email)) {
            echo 'error: Missing required fields';
            exit;
        }

        // Check if email already exists
        $checkEmailQuery = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($checkEmailQuery);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo 'email_exists';
        } else {
            echo 'email_available';
        }

        $stmt->close();
        exit; // Stop further execution

    } elseif ($_POST['action'] === 'register') {
        $id = generateRandomString(8);
        $fname = $_POST['fname'] ?? '';
        $lname = $_POST['lname'] ?? '';
        $phone = $_POST['phone_number'] ?? ''; // Update to match POST variable name for phone
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if (empty($fname) || empty($lname) || empty($phone) || empty($email) || empty($password)) {
            echo 'error: Missing required fields';
            exit;
        }

        // Check if phone already exists
        $checkQuery = "SELECT * FROM user WHERE email = ? OR phone_number = ?";
        $stmt = $conn->prepare($checkQuery);

        if (!$stmt) {
            die("Prepare failed: " . $conn->error); // Check if prepare() failed
        }

        $stmt->bind_param("ss", $email, $phone);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if ($row['email'] === $email) {
                echo 'email_exists'; // Email already exists
            } elseif ($row['phone_number'] === $phone) {
                echo 'phone_exists'; // Phone number already exists
            }
            $stmt->close();
            exit; // Stop further execution
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert new user
        $insertQuery = "INSERT INTO user (id, first_name, last_name, phone_number, email, password) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssssss", $id, $fname, $lname, $phone, $email, $hashedPassword);

        if ($stmt->execute()) {
            echo 'success';
        } else {
            echo 'error: ' . $stmt->error; // Debugging
        }

        $stmt->close();
    }
}

$conn->close();

}
