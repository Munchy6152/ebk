<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!----font awesome-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-------custom css------>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="styleee.css">
        <title>EventsByKookies</title>
        <link rel="icon" type="image/x-icon" href="C:\Users\phaxdigit\Desktop\EventsBykookies\images\favicon.ico">
    </head>

    <body>
        
        <div class="sign-up-form">
            <i class="fas fa-user fa-4x"></i>
            <h1>Sign Up Now</h1>
            <form action="signin_process.php" method="post">
                <!-- Replace "signup_process.php" with the actual backend script for handling signup -->
                
                <input type="text" class="input-box" placeholder="Name" required>
                <input type="password" class="input-box" placeholder="Password" required> <br/> <br/>
                <button type="button" class="form-btn">Sign In</button>
                <hr>
                <p class="or">OR</p>
                <button type="button" class="signUp-btn">Login with Google</button>



            </form>
        </div>


    </body>
</html>