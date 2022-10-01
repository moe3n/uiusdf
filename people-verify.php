<?php include "dbconnect.php";


// check if uiuid is in database
$uiuid = $_POST['uiuid'];
$uiuid = mysqli_real_escape_string($conn, $uiuid);
$uiuid = htmlentities($uiuid);

$sql = "SELECT * FROM people WHERE uiuid = '$uiuid'";
$result = $conn->query($sql);
$peoples = $result->fetch_all(MYSQLI_ASSOC);

if (count($peoples) > 0) {
    echo "You are a member";
} else {
    echo "You are not a member";
}


