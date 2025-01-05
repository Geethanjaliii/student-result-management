<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $dob = $_POST['dob'];

    $stmt = $conn->prepare("SELECT * FROM students WHERE username = ? AND dob = ?");
    $stmt->bind_param("ss", $username, $dob);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo "<h1>Welcome, " . $row['name'] . "!</h1>";
        echo "<p>Your result is: " . $row['result'] . "</p>";
    } else {
        echo "<h1>Invalid credentials or result not found!</h1>";
    }

    $stmt->close();
}
$conn->close();
?>
