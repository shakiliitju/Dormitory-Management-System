<?php
include_once 'connection.php';
$sql = "DELETE FROM message_table WHERE Stu_ID='" . $_GET["Stu_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'disp.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>