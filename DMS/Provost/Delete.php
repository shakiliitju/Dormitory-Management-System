<?php
include_once 'connection.php';
$sql = "DELETE FROM provost WHERE P_ID='" . $_GET["P_ID"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'DispProvost.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>