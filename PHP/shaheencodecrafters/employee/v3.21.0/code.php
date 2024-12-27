<?php

include 'module.php';


// *****************************ADMIN CRUD*****************************


if (isset($_POST['create_admin'])) {

    
    $id = generateRandomId();
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $addedBy = $adminId;

    // Check for duplicate email or phone
    $stmt = $conn->prepare("SELECT id FROM admin WHERE email = ? OR phone = ?");
    $stmt->bind_param("ss", $email, $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "Error: Email or Phone number already exists!";
        $stmt->close();
        exit;
    }
    $stmt->close();

    // Image Upload
    $image = $_FILES['image']['name'];
    $targetDir = "uploads/admin/";
    $uniqueImageName = uniqid() . "_" . basename($image);
    $targetFile = $targetDir . $uniqueImageName;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is valid
    $allowedExtensions = ['jpg', 'jpeg', 'png'];
    if (in_array($imageFileType, $allowedExtensions)) {
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $stmt = $conn->prepare("INSERT INTO admin (id, name, email, phone, password, image, AddedBy) VALUES (?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssssss", $id, $name, $email, $phone, $password, $uniqueImageName, $addedBy);
            $stmt->execute();
            $stmt->close();
            echo "Admin added successfully!";
        } else {
            echo "Error uploading the image.";
        }
    } else {
        echo "Only JPG, JPEG, and PNG files are allowed.";
    }
}


// READ Operation
if (isset($_GET['fetch_admins'])) {
    $sql = "SELECT * FROM admin";
    $result = $conn->query($sql);
    $admins = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $admins[] = $row;
        }
    }
    echo json_encode($admins);
}

// UPDATE Operation
if (isset($_POST['update_admin'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Check if a new image file is uploaded
    if (!empty($_FILES['image']['name'])) {
        // Retrieve current image file name from database
        $stmt = $conn->prepare("SELECT image FROM admin WHERE id = ?");
        $stmt->bind_param("s", $id);
        $stmt->execute();
        $stmt->bind_result($currentImage);
        $stmt->fetch();
        $stmt->close();

        // Delete the old image file if it exists
        if ($currentImage && file_exists("uploads/admin/" . $currentImage)) {
            unlink("uploads/admin/" . $currentImage);
        }

        // Upload new image
        $image = $_FILES['image']['name'];
        $targetDir = "uploads/admin/";
        $uniqueImageName = uniqid() . "_" . basename($image);
        $targetFile = $targetDir . $uniqueImageName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Check and move the new file
        if (in_array($imageFileType, ['jpg', 'jpeg', 'png']) && move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            // Update admin details with new image
            $stmt = $conn->prepare("UPDATE admin SET name = ?, email = ?, phone = ?, password = ?, image = ? WHERE id = ?");
            $stmt->bind_param("ssssss", $name, $email, $phone, $password, $uniqueImageName, $id);
        }
    } else {
        // Update without changing the image
        $stmt = $conn->prepare("UPDATE admin SET name = ?, email = ?, phone = ?, password = ? WHERE id = ?");
        $stmt->bind_param("sssss", $name, $email, $phone, $password, $id);
    }
    $stmt->execute();
    $stmt->close();
    echo "Admin updated successfully!";
}

// DELETE Operation
if (isset($_POST['delete_admin'])) {
    $id = $_POST['id'];

    // Retrieve current image file name from database
    $stmt = $conn->prepare("SELECT image FROM admin WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->bind_result($currentImage);
    $stmt->fetch();
    $stmt->close();

    // Delete the image file if it exists
    if ($currentImage && file_exists("uploads/admin/" . $currentImage)) {
        unlink("uploads/admin/" . $currentImage);
    }

    // Delete the admin record from the database
    $stmt = $conn->prepare("DELETE FROM admin WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->close();
    echo "Admin deleted successfully!";
}


// *****************************DEPARTMENT CRUD*****************************

// Create Department
if (isset($_POST['create_department'])) {
    $id = generateRandomId();
    $name = $_POST['name'];
    $employeeCount = 0;
    $addedBy = $adminId;  // Ensure $adminId is available in the session or defined elsewhere

    if (!empty($name) && !empty($addedBy)) {

        $stmt = $conn->prepare("INSERT INTO department (id, name, employeeCount, addedBy) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $id, $name, $employeeCount, $addedBy);
        $stmt->execute();
        $stmt->close();
        echo "Department added successfully!";
    } else {
        echo "Fill all the fields";
    }
}

// Read Departments
if (isset($_GET['fetch_departments'])) {
    $sql = "SELECT * FROM department";
    $result = $conn->query($sql);
    $departments = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $departments[] = $row;
        }
    }
    echo json_encode($departments);
}

// Update Department
if (isset($_POST['update_department'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    $stmt = $conn->prepare("UPDATE department SET name = ? WHERE id = ?");
    $stmt->bind_param("ss", $name, $id);
    $stmt->execute();
    $stmt->close();
    echo "Department updated successfully!";
}

// Delete Department
if (isset($_POST['delete_department'])) {
    $id = $_POST['id'];

    // Delete the department record from the database
    $stmt = $conn->prepare("DELETE FROM department WHERE id = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();
    $stmt->close();
    echo "Department deleted successfully!";
}



// *****************************EMPLOYEE CRUD*****************************


// CREATE Operation
if (isset($_POST['create_employee'])) {
    $id = generateRandomId();
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $designation = $_POST['designation'];
    $departmentId = $_POST['departmentId'];
    $username = $firstName . $cnic . generateRandomId() . $lastName ;
    $addedBy = $adminId;

    // Handle file upload for employee image
    $imageName = "";
    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $imageName = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/employee/" . $imageName);
    }

    // Insert the new employee record
    $insertEmployeeSql = "INSERT INTO employee (id, firstName, lastName, username, cnic, email, phoneNumber, image, designation, departmentId, timeAdded, AddedBy)
                          VALUES ('$id', '$firstName', '$lastName', '$username', '$cnic', '$email', '$phoneNumber', '$imageName', '$designation', '$departmentId', NOW(), '$addedBy')";
    
    if (mysqli_query($conn, $insertEmployeeSql)) {
        // Increment employee count in the selected department
        $updateDepartmentSql = "UPDATE department SET employeeCount = employeeCount + 1 WHERE id = '$departmentId'";
        mysqli_query($conn, $updateDepartmentSql);

        echo "Employee added successfully!";
    } else {
        echo "Error adding employee: " . mysqli_error($conn);
    }
}

// READ Operation
if (isset($_GET['fetch_employees'])) {
    $sql = "SELECT employee.*, department.name AS departmentName FROM employee 
            LEFT JOIN department ON employee.departmentId = department.id";
    $result = $conn->query($sql);
    $employees = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $employees[] = $row;
        }
    }
    echo json_encode($employees);
}

// UPDATE Operation
if (isset($_POST['update_employee'])) {
    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $cnic = $_POST['cnic'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $designation = $_POST['designation'];
    $departmentId = $_POST['departmentId'];

    // Handle file upload for updated employee image
    if (isset($_FILES['image']['name']) && $_FILES['image']['name'] != "") {
        $imageName = time() . '_' . $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'], "uploads/employee/" . $imageName);

        // Update with new image
        $stmt = $conn->prepare("UPDATE employee SET firstName = ?, lastName = ?, cnic = ?, email = ?, phoneNumber = ?, image = ?, designation = ?, departmentId = ? WHERE id = ?");
        $stmt->bind_param("sssssssss", $firstName, $lastName, $cnic, $email, $phoneNumber, $imageName, $designation, $departmentId, $id);
    } else {
        // Update without new image
        $stmt = $conn->prepare("UPDATE employee SET firstName = ?, lastName = ?, cnic = ?, email = ?, phoneNumber = ?, designation = ?, departmentId = ? WHERE id = ?");
        $stmt->bind_param("ssssssss", $firstName, $lastName, $cnic, $email, $phoneNumber, $designation, $departmentId, $id);
    }

    if ($stmt->execute()) {
        echo "Employee updated successfully!";
    } else {
        echo "Error updating employee: " . $stmt->error;
    }
    $stmt->close();
}

// DELETE Operation
if (isset($_POST['delete_employee'])) {
    $id = $_POST['id'];

    // Retrieve the department ID before deleting the employee
    $employeeSql = "SELECT departmentId FROM employee WHERE id = '$id'";
    $result = $conn->query($employeeSql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $departmentId = $row['departmentId'];

        // Delete the employee
        $deleteSql = "DELETE FROM employee WHERE id = '$id'";
        if (mysqli_query($conn, $deleteSql)) {
            // Decrement the employee count in the department
            $updateDepartmentSql = "UPDATE department SET employeeCount = employeeCount - 1 WHERE id = '$departmentId'";
            mysqli_query($conn, $updateDepartmentSql);

            echo "Employee deleted successfully!";
        } else {
            echo "Error deleting employee: " . mysqli_error($conn);
        }
    } else {
        echo "Employee not found!";
    }
}


// Fetch Employee by Username for Identity Card
if (isset($_GET['get_employee_by_username']) && isset($_GET['username'])) {
    $username = $_GET['username'];
    $sql = "SELECT * FROM employee WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $employee = $result->fetch_assoc();
        echo json_encode($employee);
    } else {
        echo json_encode(["error" => "Employee not found"]);
    }
}







// ******************************************************************CONNECTION CLOSED******************************************************************


$conn->close();