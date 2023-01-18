
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
        <input type="submit" name="submit" value="Get Prime">
    </form>
    
    <?php
if (isset($_POST['submit'])) {
$number = $_POST['inputNumber'];
  $isPrime = true;
if ($number == 1) {
  echo "<h1>1 is neither prime nor a composite number</h1>";
} elseif ($number > 1) {
  for ($i = 2; $i < $number; $i++) {
    if ($number % $i == 0) {
      $isPrime = false;
      break;
    }
  }
  if ($isPrime) {
    echo "<h1>{$number} is a prime number</h1>";
  } else {
    echo "<h1>{$number} is not a prime number</h1>";
  }
} else {
  echo "<h1>The number is not a prime number</h1>";
}
}
?>
</body>
</html>







