 <?php
include 'connnection/db.php';
session_start ();

if (isset($_SESSION['name'])) {
    header('location:dashboard.php');
}
else{
    if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password']
        $hash_password = sha1($password)
    }
}
if (empty $email or empty ($password)) {
    echo'<div class="alert alert-warning d-flex align-items-center" role="alert">
    <div>
    All field required
    </div>
    </div>';
}
else {
    $query = "SELECT * FROM list_1 WHERE email = '$email' and password ='$hash_password'";
    $result = mysqli_query($con, $query);
    if ($result) {
        while ($arr = mysqli_fetch_array($result)) {
            $name = $arr ['']
        }
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
     <div class="container">
     <form action="" method="post">
     <div>
     <label for="">Email</label>
     </div>
     <div>
         <input type="email" name="Email">
     </div>
     <div>
     <label for="">Password</label>
     </div>
     
     <div>
         <input type="password" name="password">
     </div>
     <div>
    <label for="">File</label>
    </div>
<div>
<input type="file" name="file" class="form-control">
</div>
<div>
     <button class="btn btn-info m-3 bg-secondary">Submit</button>
 </div>
 </form>
 </div>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
