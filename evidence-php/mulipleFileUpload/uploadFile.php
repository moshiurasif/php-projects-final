<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>

    
   
    <?php
        if (isset($_POST['upload'])) {
            $f1 = $_FILES['image1'];
            $f2 = $_FILES['image2'];
            $f3 = $_FILES['image3'];
            // print_r($f);
            $types = ["image/png", "image/jpg", "image/jpeg", "image/gif", "image/webp"];
            
            
            if (in_array($f1['type'] ,$types) && in_array($f2['type'] ,$types) && in_array($f3['type'] ,$types)) {
                move_uploaded_file($f1['tmp_name'],'images/banner1.jpg'); 
                move_uploaded_file($f2['tmp_name'],'images/banner2.jpg'); 
                move_uploaded_file($f3['tmp_name'],'images/banner3.jpg'); 
                echo "File uploaded Successfully";
            }else{
                echo "Sorry, please try again";
            }
            
        }
    ?>

<div class="container">
    <div class="row">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image1"><br>
        <input type="file" name="image2"><br>
        <input type="file" name="image3"><br>
        <input type="submit" value="Upload" name="upload">
    </form>
    </div>
    <div class="row">
    <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/banner1.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="images/banner2.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="images/banner3.jpg" class="d-block w-100" alt="">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>