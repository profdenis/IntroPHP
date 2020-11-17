<?php
require_once "../../common/functions_defs.php";
$title = "Part D3 -- HTML tables revisited";
require_once "../../common/header.php";

$conn = get_introdb_conn();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, name, dob FROM person";
$result = $conn->query($sql);

echo "<h3>Person</h3>";
if ($result->num_rows > 0) {
    echo_table($result);
} else {
    echo "0 results";
}
$conn->close();

require_once "../../common/footer.php";

