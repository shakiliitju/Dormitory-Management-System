<?php
include_once 'connection.php';
$sql = "DELETE FROM Room WHERE Room_Number='" . $_GET["Room_Number"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispRoom.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>