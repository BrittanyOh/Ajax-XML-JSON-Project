<?php
// getting data from database
  // getting data from database
  $conn = new mysqli("localhost", "root", "521347", "books");

  $result = mysqli_query($conn, "SELECT DISTINCT book.title, a.F_Name, a.L_Name, y.bookYear, book.categoryID, c.CategoryName, p.price
          FROM Titles book, Years y,Author a,Prices p,Category c
          WHERE book.categoryID = c.categoryID
          AND a.bookID = book.bookID
          AND y.bookID = book.bookID
          AND p.bookID = book.bookID");

  $data = array();


  if(isset($_REQUEST["Category"])){
    $searchCat = $_REQUEST['Category'];
    $sql =  "SELECT DISTINCT book.title, a.F_Name, a.L_Name, y.bookYear, book.categoryID, c.CategoryName, p.price
            FROM Titles book, Years y,Author a,Prices p,Category c
            WHERE book.categoryID = c.categoryID
            AND a.bookID = book.bookID
            AND y.bookID = book.bookID
            AND p.bookID = book.bookID
            AND c.categoryName = \"$searchCat\"";

      $result = mysqli_query($conn, $sql);
    }
      while($row = mysqli_fetch_assoc($result)){
        echo "<tr class='book-details'>";
        echo "<td id='book-title'>".$row['title']."</td>";
        echo "<td id='book-author'>".$row['F_Name']."</td>";
        echo "<td id='book-author'>".$row['L_Name']."</td>";
        echo "<td id='book-year'>".$row['bookYear']."</td>";
        echo "<td id='book-cat-id'>".$row['categoryID']."</td>";
        echo "<td id='book-cat'>".$row['CategoryName']."</td>";
        echo "<td id='book-price'>".$row['price']."</td>";
        echo "</tr>";
      }
?>
