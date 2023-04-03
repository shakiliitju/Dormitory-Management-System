<?php
include_once 'connection.php';
$sql = "DELETE FROM orders WHERE order_id='" . $_GET["order_id"] . "'";
if (mysqli_query($conn, $sql)) {
    include 'Displayorder.php';
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>