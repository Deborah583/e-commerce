<?php
// echo "<h1 style='color: yellow';>PHP is a server side language</h1>";
// echo "<p> very good</p>";

 // // variables
// $Name = "Ayodele";
// echo $Name;
// echo "</br>";
// $Age = 15;
// echo $Age;
// echo "</br>";
// $Choice = true;
// echo $Choice;
// echo "</br>";

// $cars = array("Toyota,Honda");
// print_r($cars);
// echo "</br>";
 



 // // strings Method
// $word = "Music is life";
// echo$word;
// echo "</br>";
// // strlen
// echo strlen($word);
// echo "</br>";
// // str_word_count
// echo str_word_count($word);
// echo "</br>";
// // strtolower
// echo strtolower($word);
// echo "</br>";
// // strtoupper
// echo strtoupper($word);
// echo "</br>";
// // strrev
// echo strrev($word);
// echo "</br>";
// // strpos
// echo strpos($word,"Music");
// echo "</br>";
// // str_replace
// echo str_replace("Music","Love", $word);
// echo "</br>";
// // explode
// print_r(explode(" ",$word));
// echo "</br>";
// // implode
// $Age =array(10,12,15,18);
// echo implode(",",$Age);
// echo "</br>";
// // lcfirst
// echo lcfirst($word);
// echo "</br>";
// // substr
// echo substr($word,0,10)."....";
// echo "</br>";

// // concatenate joining strings together(.)
// $quote ="I love money";
// $money ="Money making gang";
// echo $quote." ".$money;
// echo "</br>";
// // hashing algorithm
// $password = "test123";
// echo sha1($password);
// echo md5($password);
// echo "</br>";


// echo min(0 , 2, 3, 5, 6);
// echo max(0 , 2, 3, 5, 6);
// echo abs(-7);
// echo "</br>";
// sqrt(64);
// echo "</br>";
// round(0,145,1);
// rand();




// // arithmetic operators
// $x = "15";
// $y ="6";
// echo $x + $y;
// echo "</br>";
// echo $x - $y;
// echo "</br>";
// echo $x * $y;
// echo "</br>";
// echo $x / $y;
// echo "</br>";
// echo $x ** $y;

// // assignment operators
// $x = 10;
// // $y += 1;
// // echo $x;
// echo $x++;

// $y = 10;
// // echo $y;
// echo $y--;

// //  Conditional statements
//     $x = 100;
//     if($x > 100){
//     echo "huge";
// }elseif ($x == 50) {
//     echo "medium";
// }
// elseif ($x <50) {
//     echo "small";
// } -->


 
// $password = strlen("madman4564534");
// $hash_password = sha1($password);

// if ($password < 6) {
//     echo "password too weak";
// }elseif ($password > 12) {
//     echo "password too long";
// }else{
//     echo "password ok";
//     echo "</br>";
// }


// // switch statements
// $house = "bungalow";
// switch ($house) {
//     case 'duplex':
//         echo "The house is duplex";
//         break;
//     case "bungalow":
//         echo "There is a match";
//     default:
//         echo "Error";
//         break;
//         echo "</br>";
// }

// // loop
// $x = 1;
// while ($x <= 10) {
//     if ($x == 6) {
//         $x += 1;
//         continue;     
//         }  
//   echo $x . "<br>";
//   $x += 1;   
// }
// // for loop
// for ($x=1; $x <= 10 ; $x++) {
//     if ($x == 4) {
//         break;
//     }
//    echo $x . "<br>";
// }

// $food = array("rice","beans","spag","indomie");
// // $foodlen = count($food);
// // for ($x=0; $x < $foodlen; $x++) { 
// //     echo $food[$x]."<br>";
// // }
// foreach ($food as $value) {
//     echo $value."<br>";
// }
include 'connection/db.php';
  if (isset($_POST['submit'])) {
    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Password= $_POST['Password'];
    $image_name = $_FILES ['fileToUpload']['name'];
    $tmp_name = $_FILES['fileToUpload']['tmp_name'];

    $path = "images/$image_name";
    $passwordLength = strlen($password);
    $hash_password = sha1($password);

   if (empty($Name) or empty($Email) or empty($Password) or empty($image_name)) {
    echo "
    All Fields Required
    ";
   }
elseif ($passwordLength < 6 or $passwordLength > 12) {
    echo '<div class="alert alert-Warning d-flex align-items-center" role="alert">
    <div>
    <h4>Invalid Password</h4>
    </div>
    </div>';   
    }
    else{
       $upload =move_uploaded_file($tmp_name, $path);
       $query ="INSERT INTO will (Name, Email, Password, Files) VALUES ('$Name', '$Email','$hash_password','$image_name')";
       $result = mysqli_query($con, $query);
    if ($result) {
        echo '<div class="alert alert-success d-flex align-items-center" role="alert">
        <div>
        Registration Successful
        </div>
        </div>';   
    }
    else {
        echo '<div class="alert alert-Danger d-flex align-items-center" role="alert">
        <div>
        Registration Unsuccessful
        </div>
        </div>';   
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
 <?php include 'cox.php' ?>
     <div class="container">
     <form action="" method="post">
     <div>
         <label for="">Name</label>
     </div>
     <div>
         <input type="text" name="Full Name">
     </div>
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
    <label for="">Files</label>
    </div>
<div>
<input type="file" name="file" class="form-control">
</div>
     
     <button>Submit</button>
 </form>
 <div>
     copyright&copy;ayodeleafolabi683@gmail.com 2022-<?php echo date("y-m-d-h-i-s");?>
 </div>
 </div>
 <!-- JavaScript Bundle with Popper -->
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>