<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style3.css">
    <title>טבלה</title>
</head>
<body>
<?php
print "<table border='5'>";
for($i = 0; $i <= 10; $i++) {
    print '<tr>';
    for ($j=1; $j<=10; $j++) {   
        $number = $i*$j;
        print "<td>$number</td>";
    }
    print '</tr>';
}
print '</table>';
?>
<!-- <form action="/action_page.php">
 
  <input type="text" id="num" name="num" placeholder="choose a number"><br>
  <input name="submit" type="submit" value="Submit" id="btn">
</form>  -->
<div class="col-md-6 login-form-1">
                        <form action="test3.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="putNum" placeholder="put num" value="" />
                            </div>

                            <div class="form-group">
                                <input id="btn" type="submit" name="submit2" class="btnSubmit" value="submit2" />
                            </div>
                            <br>
                            
                        </form>
                    </div>

<!-- <div id="center_button">
    <button id="btn" onclick="location.href='pic2.php'">Back to Home</button>
</div> -->

<button class="button" onclick="location.href='pic2.php'">test</button>

<?php
session_start();
if(isset($_POST['submit2'])){
    $num = $_POST['putNum'];
    if (empty($num)){echo "<script>
        alert('Please put a number');
        </script>;";;}
    else{
        $_SESSION['num'] = $num;
        header("Location: pic1.php");
        ;

    }
}
?>
</body>
</html>