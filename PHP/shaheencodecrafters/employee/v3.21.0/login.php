<?php
include 'config.php';
session_start();

if (isset($_SESSION['employee_id'])) {
  header("Location: index.php");
  exit();
}

$error = "";

if (isset($_POST['submit'])) {
    $qrCodeValue = $_POST['qr_code_value'];

    // Prepare SQL to retrieve the employee by username (from QR code)
    $stmt = $conn->prepare("SELECT id, username FROM employee WHERE username = ?");
    $stmt->bind_param("s", $qrCodeValue);
    $stmt->execute();
    $stmt->store_result();

    // If employee found, set session variable
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $dbUsername);
        $stmt->fetch();

        $_SESSION['employee_id'] = $id;
        header("Location: index.php"); // Redirect to employee dashboard
        exit();
    } else {
        $error = "Invalid QR Code!";
    }
    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "head.php"; ?>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
<main class="main" id="top">
    <div class="container">
        <div class="row min-vh-100">
            <div class="col-md-6 mx-auto py-5">
                <div class="card">
                    <div class="card-body">
                        <h3 class="text-center">Employee Login</h3>
                        <?php if (!empty($error)): ?>
                            <div class="alert alert-danger" role="alert">
                                <?php echo $error; ?>
                            </div>
                        <?php endif; ?>
                        <form method="POST" action="">
                            <input type="hidden" id="qr-code-value" name="qr_code_value">
                            <div class="mb-3">
                                <label class="form-label" for="qr-code">Scan QR Code</label>
                                <video id="preview" style="width: 100%; height: auto;"></video>
                            </div>
                            <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Login with QR Code</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    // Set up Instascan QR code scanner
    let scanner = new Instascan.Scanner({ video: document.getElementById('preview') });
    scanner.addListener('scan', function (content) {
        // Set QR code content to the hidden input and auto-submit the form
        document.getElementById('qr-code-value').value = content;
        document.forms[0].submit();
    });

    // Start scanning with the back camera
    Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
            scanner.start(cameras[0]); // Choose the first available camera
        } else {
            console.error('No cameras found.');
            alert("No cameras found. Please check camera permissions.");
        }
    }).catch(function (e) {
        console.error(e);
        alert("Error accessing camera: " + e);
    });
</script>

</body>
</html>
