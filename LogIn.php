<!DOCTYPE html>

<html dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
        <link rel = "stylesheet" href = "Header_And_Footer.css">
        <style>
            main{
                flex-grow: 1;
            }
            
            body{
                display: flex;
                flex-direction: column;
                /*min-height: 100vh;*/
            }
            
            #enterInfo{
                display: flex;
                flex-direction: column;
                text-align: center;
                align-items: center;
                width: 100%;
            }
            
            #submit{
                width: 4cm;
                height: 1cm;
                font-size: 16px;
                background-color: #abcdef;
                border-color: #abcdef;
                border-radius: 4px;
            }
            
            input[type = "text"],
            input[type = "password"]{
                width: 60%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid black;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 16px;
            }
            
            #newAccount{
                text-align: center;
                align-items: center;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <?php require('../Header/Header.php');?>
        
        <?php 
        
        ini_set('display_errors','Off');
        ini_set('error_reporting', E_ALL );
        define('WP_DEBUG', false);
        define('WP_DEBUG_DISPLAY', false);
            $username = "";
            $password = "";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $username = filter_data($_POST['username']);
                $password = filter_data($_POST['password']);
            }
            
            function filter_data($data){
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
//            $username = $_POST["username"];
//            $password = $_POST["password"];
            
//            print $username."<br><br>";
//            print $password;
        ?>

        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "POST">
            <div id = "enterInfo">
                <label for = "username">Username:</label> 
                <input type = "text" id = "username" name = "username" required="true"><br><br>
                <label for = "password">Password:</label>
                <input type = "password" id = "password" name = "password" required="true"><br><br>
                <input type = "submit" id = "submit" value = "Log In"><br><br>
            </div>
        </form>
        <br>
            <hr />
            <br>
            <div id = "newAccount">
                <label>Don't have an account?</label><br>
                <label>Sign up here: </label> <a href = "../SignUp/SignUp.php" target = "_SELF">Sign up</a><br><br>
            </div>      
        
        
        <?php require('../Footer/Footer.php');?>
    </body>
</html>
