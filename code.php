<?php
include 'config.php';

if (isset($_POST['btnadd'])) {
    $name = $_POST['sname'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    $str = "INSERT INTO stdrec (name, class, address, city) VALUES ('$name', '$class', '$address', '$city')";
    mysqli_query($con, $str);
    header("Location: index.php");
    exit();
}

if (isset($_GET['mode']) && $_GET['mode'] == 'delete') {
    $rollno = $_GET['rollno'];
    $str = "DELETE FROM stdrec WHERE rollno='$rollno'";
    if (mysqli_query($con, $str)) {
        header("Location: index.php");
        exit();
    }
}

if (isset($_GET['mode']) && $_GET['mode'] == 'update') {
    $rollno = $_GET['rollno'];
    $name = $_POST['name'];
    $class = $_POST['class'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    $str = "UPDATE stdrec SET name='$name', class='$class', address='$address', city='$city' WHERE rollno='$rollno'";
    if (mysqli_query($con, $str)) {
        header("Location: index.php");
        exit();
    }
}
?>
