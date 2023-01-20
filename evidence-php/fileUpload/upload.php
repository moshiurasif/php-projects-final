
<?php 

    if(isset($_POST['submit'])){

        $files = $_FILES['file'];
        $sizeLimit = 400 * 1024;
        $allowedTypes = ['application/pdf','application/msword','image/webp','image/gif','image/jpg','image/jpeg','image/png'];

        if(in_array($files['type'],$allowedTypes )){
           if($files['size'] < $sizeLimit){
                // Images Upload
                move_uploaded_file($files['tmp_name'],"files/".$files['name']);
                echo "Upload Success!";
           }else{
            echo "Image Size to large";
           }
        }else{
            echo "This file not Supported!";
        }
        
       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20">
            <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="">
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>
            </div>
        </div>
    </div>
    
</body>
</html>