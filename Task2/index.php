<?php require 'validate_login.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="styles.css">
        <script type="text/javascript" src="script.js"></script>
    </head>
    <body>
        <header>
            <a href="index.php">
                <img src="image/weblogo.png" alt="School logo" class="weblogo">
            </a>
        </header>
        <!--------------Code snippet from w3schools.org------------------------->
        <main class="login_main">
            <h3>Login Form</h3>

            <form action="validate_login.php" method="post">
                <div class="imgcontainer">
                    <img src="image/userlogo.png" alt="user" class="userlogo">
                </div>

                <div class="container">
                    <label for="uname"><b>Username</b></label>
                    <input id="login_input" type="text" placeholder="Enter Username" name="uname" required>

                    <label for="psw"><b>Password</b></label>
                    <input id="login_input" type="password" placeholder="Enter Password" name="psw" required>
                        
                    <button type="submit">Login</button>
                    <label>
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                    </label>
                </div>

                <div class="container" style="background-color:#f1f1f1">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
            </form>
        </main>

        <footer>
            <p>&copy; CSYM019 2023</p>
        </footer>
    </body>
</html>