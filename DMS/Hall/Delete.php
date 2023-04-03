<?php
include_once 'connection.php';
$sql = "DELETE FROM hall WHERE H_ID='" . $_GET["H_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispHall.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>