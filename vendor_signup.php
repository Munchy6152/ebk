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
            <form action="" method="post">
            <h3>What type of account would you like to create?</h3>
                <!-- Replace "signup_process.php" with the actual backend script for handling signup -->
                
                <input type="text" class="input-box" placeholder="Name" required> 
                <input type="email" name="email" class="input-box" placeholder="Email" required>
                <input type="password" class="input-box" placeholder="Password" required>
                <input type="password" class="input-box" placeholder="Confirm Password" required><br/> <br/>
               <!--- <select id="service" name="service">
                        <option value="Photography">Photography & Videographer</option>
                        <option value="Catering">Catering Services</option>
                        <option value="Makeup">Beauty & Makeup Artist</option>
                        <option value="cake">Wedding & Birthday Cake</option>
                        <option value="decorator">Event Decorator</option>
                        <option value="music">Music Band & DJ</option>
                        </select> -->
                <select name="user_type">
                        <option value="client">Client</option>
                        <option value="vendor">Event Vendor</option>
                </select>
                <p><span><input type="checkbox" required></span> I agree to the terms of services</p>
                <input type="submit" name="submit" value="Register Now" class="form-btn">
                <hr>
                <p class="or">OR</p>
                <p>Do you have an account? <a href="sign_in.php">Sign in</a></p>


            </form>
        </div>
        

    </body>
</html>