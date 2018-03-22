
<?php

include 'connect.php';

$sql = "SELECT * FROM custom";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Details"];
    }
} else {
    echo "0 results";
}
$conn->close();
?>