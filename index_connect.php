<?php

include('index_data.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    if (isset($_POST['details'])) {
        $details = $_POST['details'];
    } else {
        $details = null; // Or set a default value
    }
       
    

    $stmt = $conn->prepare("INSERT INTO `event` (`Name`, `Email`, `Details`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $details);

    if ($stmt->execute()) {
        header("Location: thankyou.html");
        exit();
    } else {
        echo "Submission Failed: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
}

?>
