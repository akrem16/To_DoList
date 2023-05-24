<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/svg" href="img/Untitled-1.svg">

    <title>Document</title>
</head>
<body>
<div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="testLogin.php" method="post"> 
        <h2 style="padding-bottom: 10px;">Log In</h2>
        <div class="alert">
            <?php 
                if(isset($_GET['error'])){?>
                <p class="error">
                <?php echo $_GET['error']; ?>
                </p>
                <?php }?>
        </div>

        <label for="Name">Name</label>
        <input type="text" name="name" id="" placeholder="User Name"><br>

        <label for="Name">Password</label>
        <input type="password" name="password" id="" placeholder="Password"><br>

        <button type="submit" class="login">Login</button>

    </form>
</body>
</html>


