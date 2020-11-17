<?php
require_once "../../common/functions_defs.php";
$title = "Part D4 -- without prepared statement";
require_once "../../common/header.php";

$conn = get_introdb_conn();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (empty($_GET["id"])) {
    $sql = "SELECT id, name, dob FROM person";
    $result = $conn->query($sql);

    echo "<h3>Person</h3>";
    if ($result->num_rows > 0) {
        echo_table($result);
    } else {
        echo "0 results";
    }
} else {
    // open for SQL injection, even if we clean the data
    $id = clean_data($_GET["id"]);
    $sql = "SELECT name, dob FROM person WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_row();
        echo "<p><strong>Name</strong>: $row[0]</p>";
        echo "<p><strong>Date of birth</strong>: $row[1]</p>";
    } else {
        echo "Person not found";
    }
}
$conn->close();

require_once "../../common/footer.php";

