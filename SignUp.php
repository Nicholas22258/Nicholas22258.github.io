<!DOCTYPE html>

<html dir = "ltr">
    <head>
        <meta charset="UTF-8">
        <title>Sign Up</title>
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
            input[type = "email"],
            input[type = "password"],
            input[type = "tel"]{
                width: 60%;
                padding: 10px;
                margin-bottom: 20px;
                border: 1px solid black;
                border-radius: 4px;
                box-sizing: border-box;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <?php require('../Header/Header.php');?>

        <main>
            <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method = "post">
                <div id = "enterInfo">
                    <label for = "username">Username:</label> 
                    <input type = "text" id = "username" name = "username" required="true"><br><br>
                    <label for = email>Email:</label>
                    <input type = "email" id = "email" name = "email" required="true"><br><br>
                    <label for = "phonenumber">Phone Number:</label>
                    <input type = "tel" id = "phonenumber" name = "phonenumber"><br><br>
                    <label for = "password">Password:</label>
                    <input type = "password" id = "password" name = "password" required="true"><br><br>
                    <input type = "submit" id = "submit" value = "Sign Up"><br><br>
                </div>
                
            </form>
        </main>
        
        <?php require('../Footer/Footer.php');?>

    </body>
</html>
