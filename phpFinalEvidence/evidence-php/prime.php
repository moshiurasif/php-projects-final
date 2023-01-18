
<?php 

    function isPrime($n){

        for($i = 2; $i < $n ; $i++){
            if($n%$i === 0) return false;

        }

        return $n > 1;
    }


    if(isset($_POST['submit'])){

        $num = $_POST['prime']; 
        
        $prime = isPrime($num);



        if($prime){

          $message =  "$num is  a Prime Number";
            
        }else{

            $message = "$num is Not a Prime Number";

        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime</title>
</head>
<body>

<form action="" method="post">

<?= $message??""?>
<br>

    <input type="text" name="prime">
    <br>
    <input type="submit" name="submit" value="Check Prime">
</form>
    
</body>
</html>