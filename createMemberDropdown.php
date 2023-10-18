<?php
include("dbcon.php"); // Include the database connection code

// SQL query to retrieve member data
$sql = "SELECT id, firstname, surname FROM member";
$result = mysqli_query($conn, $sql);

// Create an HTML dropdown with the name 'memberID'
echo '<select name="memberID">';

// Loop through the database results to populate the dropdown
while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $fn = $row['firstname'];
    $sn = $row['surname'];

    // Option values are set to the member's ID, and the display text is their full name
    echo "<option value='$id'>$fn $sn</option>";
}

echo '</select>';

mysqli_close($conn); // Close the database connection
?>