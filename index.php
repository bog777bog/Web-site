<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Form</title>
        <link rel="stylesheet" href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css'/>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>      
    <header>
	    <div class="overlay">
            <h1>Simply The Best</h1>
            <h3>Reasons for Choosing US</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab. Vero nostrum quis, odio veniam itaque ullam debitis qui magnam consequatur ab.</p>
	        <br>
            <button>READ MORE</button>
		</div>
    </header>

        <div class="container mt-4">
<?php
   if($_COOKIE['user']==''):
?>
            <div class="row">
            <div class="col">

                <h1>Sign Up Form</h1>
                <form action="validation-form/check.php" method="post">
                    <input type="text" class="form-control" name="login"
                    id="login" placeholder="Enter login"><br>
                    <input type="text" class="form-control" name="name"
                    id="name" placeholder="Enter name"><br>
                    <input type="text" class="form-control" name="pass"
                    id="pass" placeholder="Enter password"><br>
                    <button class="btn btn-success" type="submit">Sign Up</button>
                </form> 
            </div> 
            <div class="col">
                <h1>Log In Form</h1>
                <form action="validation-form/auth.php" method="post">
                    <input type="text" class="form-control" name="login"
                    id="login" placeholder="Enter login"><br>
                    <input type="text" class="form-control" name="pass"
                    id="pass" placeholder="Enter password"><br>
                    <button class="btn btn-success" type="submit">Log In</button>
                </form>
            </div>
        <?php else: ?>
               <p>Hello <?=$_COOKIE['user']?>. To log out, click on <a href="/exit.php">here </a></p>
       <?php endif;?>

        </div>
       </div> 
    </body>
</html>
