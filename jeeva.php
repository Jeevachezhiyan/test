<?php    
include('connect.php');

$firstname = $_POST['firstname'];
$lastname  = $_POST['lastname'];

$sql = "INSERT INTO `kutty_gomu`(`firstname`, `lastname`) VALUES ('".$firstname."','".$lastname."')";

omysqli_query($conn, $sql);

$select = "SELECT * FROM `kutty_gomu`";

$result = mysqli_query($conn, $select);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

?>

