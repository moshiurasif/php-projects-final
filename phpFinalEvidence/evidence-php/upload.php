
<?php 

    if(isset($_POST['submit'])){

        $img = $_FILES['image'];
        $limit = 400 * 1024;
        $allowed = ['application/pdf','application/msword','image/webp','image/gif','image/jpg','image/jpeg','image/png'];

        if(in_array($img['type'],$allowed )){
           if($img['size'] < $limit){
                // Images Upload
                move_uploaded_file($img['tmp_name'],"file/".$img['name']);
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
</head>
<body>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image" id="">
        <br>
        <input type="submit" name="submit" value="Upload">
    </form>
    
</body>
</html>