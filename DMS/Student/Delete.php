<?php
include_once 'connection.php';
$sql = "DELETE FROM student WHERE Stu_id='" . $_GET["Stu_id"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispStudent.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>