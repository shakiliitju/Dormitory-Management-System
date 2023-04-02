<?php
include_once 'connection.php';
$sql = "DELETE FROM floor WHERE Floor_Number='" . $_GET["Floor_Number"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispFloor.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>