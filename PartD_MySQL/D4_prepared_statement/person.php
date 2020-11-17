<?php
require_once "../../common/functions_defs.php";
$title = "Part D4 -- prepared statement";
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
    // prepare the statement and bind the $id variable to the ?
    $stmt = $conn->prepare("SELECT name, dob FROM person WHERE id = ?");
    $stmt->bind_param("i", $id);

    // assign a value to $id and execute the statement
    $id = clean_data($_GET["id"]);
    // the SQL statement has already been parsed, so no worries about the value given to $id
    // but it's better to clean the data anyway
    // without prepared statements, even after cleaning the data, the query could be parsed incorrectly
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // if you expect only 1 result, don't loop, just get the only row
        $row = $result->fetch_row();
        echo "<p><strong>Name</strong>: $row[0]</p>";
        echo "<p><strong>Date of birth</strong>: $row[1]</p>";
    } else {
        echo "Person not found";
    }
}
$conn->close();

require_once "../../common/footer.php";

