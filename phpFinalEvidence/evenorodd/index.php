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
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="number" id="">
<input type="submit" value="Get Result">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    function isEven($n){
        if ($n % 2 == 0) {
            return true;
        }
        return false;   
    }
    
    $n = $_POST['number'];
    if (isEven($n)) {
        echo "<h2>$n is an even number</h2>";
    }else{
        echo "<h2>$n is an odd number</h2>";
    }
}
?>
</body>
</html>