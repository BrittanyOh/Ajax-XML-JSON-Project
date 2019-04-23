<?php

// getting data from database
// getting data from database
$conn = new mysqli("localhost", "root", "521347", "books");
// Select database
$result = mysqli_query($conn, "SELECT * FROM Titles");

//storing in array
$data = array();
while ($row = mysqli_fetch_assoc($result))
{
  $data[] = $row;
}

echo json_encode($data);
?>
