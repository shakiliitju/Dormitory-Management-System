<?php
include_once 'connection.php';
$sql = "DELETE FROM facility_problem WHERE Room_Number='" . $_GET["Room_Number"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispFP.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>