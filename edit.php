<?php
include 'connection/db.php'
session_start()
$id = $_GET ['id']
if (isset ($_POST['submit'])) {
    $Post_Title =$_POST ['Post_Body']
    $Post_Body =$_POST ['Post_Body']

    $query =  "UPDATE post SET Post_Title = '$Post_Title', Post_Body ='Post_Body' WHERE Id= $Id";
    $result = mysqli_query ($con, $query)
 if ($result) {
     echo "<div class="alert alert-success d-flex align-items-center" role="alert">
     <div>
     Post Uploaded successfully
     </div>
     </div>";
 }
else {
    "<div class="alert alert-success d-flex align-items-center" role="alert">
              <div>
              Unable to update
              </div>
              </div>";
}
 
}


















?>




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
    <?php
    $query ="SELECT * FROM post WHERE Id=$id";
    $result = mysqli_query($con, $query);
    if ($result) {
        while ($arr =mysqli_fetch_array($result)) {
            $Post_Title =$arr ['Post_Body']
            $Post_Body =$arr ['Post_Body']
        }
    }
    ?>
    <form action="" method="post">
<div>
    <label for="">Post title</label>
    </div>
    <div>
    <input type="post" name="post title">
</div> 
<div>
    <label for="">File</label>
    </div>
<div>
<input type="file" name="file" class="form-control">
</div>
<div>
<label for="">Post body</label>
</div>
<div>
<textarea name="post body" cols="30" rows="10" maxlength="20"></textarea>
</div>

    <div>
        <button type="Submit" name="Submit" class="btn btn-primary" >Add post</button>
    </div>
</form>
<!-- JavaScript Bundle with Popper -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>