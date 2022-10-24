<?php

$server_name = "localhost";
$username = "root";
$passwd = "";
$db_name = "clients";

$conn = new mysqli($server_name, $username, $passwd, $db_name);
if ($conn->connect_errno) {
    echo json_encode(['error' => $conn->connect_error]);
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lname'])) {

    $fname = testinput($_POST['fname']);
    $lname = testinput($_POST['lname']);
    $email = testinput($_POST['email']);
    $message = testinput($_POST['message']);



    $sql = "INSERT INTO contact_info(fname, lname, email, message) VALUES(?,?,?,? );";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Unsuccessful";
    }


    mysqli_stmt_bind_param($stmt, "ssss", $fname, $lname, $email, $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    echo "Successful";
}



function testinput($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
