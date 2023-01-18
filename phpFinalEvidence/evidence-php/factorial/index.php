
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
        <input type="text" name="inputNumber" id="input-number">
        <input type="submit" name="submit" value="Get Factorial">
    </form>
    
    <?php
if (isset($_POST['submit'])) {
$number = $_POST['inputNumber'];
  function getFactorial($n) {
    for ($i=1, $fact=1; $i <=$n; $i++) { 
        $fact*=$i;
    }
    return $fact;
  }
  $result = getFactorial($number);
  echo "<h1>Factorial of {$number} is {$result}</h1>";
}
?>
</body>
</html>