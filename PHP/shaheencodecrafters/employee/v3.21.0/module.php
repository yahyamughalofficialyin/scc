<?php

session_start();
if (!isset($_SESSION['employee_id'])) {
    header("Location: login.php");
    exit();
}

include "config.php";

$ecommerce = true;
$education = false;
$social = false;
$email = false;
$supportdesk = false;
$allpages= false;
$analytics= true;
$documentation=false;
$chat=true;
$calendar=false;
$saas=false;
$crm=false;
$events=false;
$management=false;
$lms=false;
$superadmin=false;

?>

<?php

if (isset($_SESSION['admin_id'])) {
    // Prepare and execute the SQL query to fetch admin details
    $adminId = $_SESSION['admin_id'];
    $stmt = $conn->prepare("SELECT name, email, phone, AddedBy, image FROM admin WHERE id = ?");
    $stmt->bind_param("s", $adminId);
    $stmt->execute();
    $stmt->bind_result($name, $email, $phone, $addedBy, $image);
    $stmt->fetch();
    $stmt->close();
}

if($addedBy=='Admin'){
    $superadmin = true;
}

function generateRandomId($length = 8)
    {
        return substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, $length);
    }

?>