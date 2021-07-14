<?php session_start();


if (isset($_SESSION['num'])) {
  
} else { 
  header("Location: test3.php");
}
if(true){
  $num=($_SESSION['num']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="box">
<?php echo $num; ?>
</div>
    
</body>
</html>