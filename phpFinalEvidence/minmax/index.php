<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body class="p-5">
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="inputNumber1">
        <input type="text" name="inputNumber2">
        <input type="text" name="inputNumber3">
        <input type="submit" name="submit" value="Get Maximum">
    </form>
    
    <?php
if (isset($_POST['submit'])) {
$number1 = $_POST['inputNumber1'];
$number2 = $_POST['inputNumber2'];
$number3 = $_POST['inputNumber3'];
  function minmax($n1, $n2, $n3) {
    if ($n1>=$n2 && $n1>=$n3) {
        return $n1;
    }elseif($n2>=$n1 && $n2>=$n3){
      return $n2;
    }else{
      return $n3;
    }
  }
  $result = minmax($number1, $number2, $number3);
  echo "<h1>Maximum number is: {$result}</h1>";
  
}
?>
</body>
</html>