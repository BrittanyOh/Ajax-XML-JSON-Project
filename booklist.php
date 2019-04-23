<?php

// getting data from database
// getting data from database
$conn = new mysqli("localhost", "root", "521347", "books");
// Select database
$result = mysqli_query($conn, "SELECT DISTINCT book.title, a.F_Name, a.L_Name, y.bookYear, book.categoryID, c.CategoryName, p.price
                                FROM Titles book, Years y,Author a,Prices p,Category c
                                WHERE book.categoryID = c.categoryID
                                AND a.bookID = book.bookID
                                AND y.bookID = book.bookID
                                AND p.bookID = book.bookID");

//storing in array
$data = array();
while ($row = mysqli_fetch_assoc($result))
{
  $data[] = $row;
}

echo json_encode($data);
?>
