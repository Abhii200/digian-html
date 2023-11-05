<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fullstack";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["year"];
   
    $image = $_FILES["image"]["name"];

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);

    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    $sql = "INSERT INTO syllabus (year,pdfs) VALUES ('$name',  '$image')";

    if ($conn->query($sql) === TRUE) {
    //   echo"Syllabus uploaded successfully";
    header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>