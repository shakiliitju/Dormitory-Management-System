<?php
include_once 'connection.php';
$sql = "DELETE FROM staff WHERE S_ID='" . $_GET["S_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispStaff.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>