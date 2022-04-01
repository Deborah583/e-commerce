<?php
include 'connection/db.php'
session_start ()
$Email = $_SESSION ['Email']

if (isset($_POST['submit'])) {
  $PostTitle = $_POST['Post'];
  $img = $_FILES['File']['name'];
  $PostBody = $_POST['PostBody']; 
}
else {
 
?>
}
























<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Document</title>
</head>
<body>
  <div class="container">
     <table class="table table-bordered">
        <tr>
          <th>Post Title</th>
          <th>Post Body</th>
          <th>Post Image</th>
          <th>Edit</th>
          <th>Delete</th>
          </tr>
          <?php
          $query ="SELECT * FROM post WHERE Email = '$email'";
          $result = mysqli_query($con, $query);
          if ($result) {
            while ($arr = mysqli_fetch_array($result)) {
              $Id = $arr ['Id'];
              $Email = $arr['Email'];
              $Post_Title = $arr ['Post_Title'];
              $img = $arr ['Files'];
              $Post_Body = $arr ['Post_Body'];

              echo "
               <tr>
                <td>$PostTitle</td>
                <td>$PostBody</td>
                <td><img src="image/$img" width="50" height="50"></td>
                <td><a href="edit.php?Id=$Id">Edit</a></td>
                <td><a href="Delete.php?Id=$Id">Delete</a></td>
               </tr>
              ";

            }
          }
          ?>
        
     </table>
  </div>
  <?php } ?>
  <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

