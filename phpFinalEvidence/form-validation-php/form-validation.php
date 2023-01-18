<?php
if (isset($_POST['submit'])){
    $userName = $_POST['username'];
    $email = $_POST['email'];

    $userNameLength = strlen($userName);
    if ($userNameLength < 4 || $userNameLength > 8) {
        $messageForUser = "<p style='color: red; font-weight: bold'>User name must be contain 4 to 8 character</p>";
    }else{
        $messageForUser = "<p style='color: green; font-weight: bold'>User name is valid</p>";
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $messageForEmail = "<p style='color: green; font-weight: bold'>Your Email address is valid</p>";
    }else{
        $messageForEmail = "<p style='color: red; font-weight: bold'>Your email address is invalid</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form validation</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="column column-60 column-offset-20" style="padding: 50px; background-color: #fcf4e8; border-radius: 5px; margin-top: 20px; height: 90vh">
                <h1 class="color-primary" style="text-align: center">Login Form</h1>
            <form method="POST">
                <label for="username">User Name:</label>
                <input type="text" placeholder="Enter Your User Name" id="username" name="username" value="<?php echo $userName??"";?>">
                <?php echo $messageForUser??"";?>
                <label for="email">Email:</label>
                <input type="text" placeholder="Enter Your Email" id="email" name="email" value="<?php echo $email??"";?>">
                <?php echo $messageForEmail??"";?>
                <br>
                <input class="button-primary" type="submit" name="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>
</body>
</html>