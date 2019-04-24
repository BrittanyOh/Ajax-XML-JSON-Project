<?php
  include 'booklist.php';
?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="books.css">
  <title>Book List</title>
</head>

<body>

  <h1>Book List</h1>

  <form>
    <?php
      $sql = "SELECT DISTINCT c.categoryName from Category c";
      $categories = mysqli_query($conn, $sql);
      if(mysqli_num_rows($categories) > 0){
        while($row = mysqli_fetch_assoc($categories)){
          echo "<input type='radio' class='category'>";
          echo $row['categoryName'];
          echo "</input>";
          }
        }else {
          echo "There are no categories!";
        }
      ?>
    </div>
    <button type="submit" id="list-books">List Books</button>
  </form>

  <table id="book-data">
    <tr>
      <th>Title</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Year</th>
      <th>categoryID</th>
      <th>Category</th>
      <th>Price</th>
    </tr>
    <tbody id="data">
    </tbody>
  </table>

</body>

<script src="books.js" type="text/javascript"></script>
</html>
